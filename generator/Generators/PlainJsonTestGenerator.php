<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Generator\Generators;

use Crescat\SaloonSdkGenerator\Data\Generator\Endpoint;
use Pionect\VismaSdk\Generator\Generators\Traits\PlainJsonDtoAssertions;
use Timatic\JsonApiSdk\Generators\JsonApiPestTestGenerator;
use Timatic\JsonApiSdk\Generators\TestGenerators\CollectionRequestTestGenerator;
use Timatic\JsonApiSdk\Generators\TestGenerators\DeleteRequestTestGenerator;
use Timatic\JsonApiSdk\Generators\TestGenerators\MutationRequestTestGenerator;
use Timatic\JsonApiSdk\Generators\TestGenerators\SingularGetRequestTestGenerator;

/**
 * Plain JSON Test Generator
 *
 * Extends JsonApiPestTestGenerator and overrides test generation methods
 * to produce tests for plain JSON responses instead of JSON:API format.
 */
class PlainJsonTestGenerator extends JsonApiPestTestGenerator
{
    /**
     * Override process() to instantiate Plain JSON test generators
     */
    public function process(
        \Crescat\SaloonSdkGenerator\Data\Generator\Config $config,
        \Crescat\SaloonSdkGenerator\Data\Generator\ApiSpecification $specification,
        \Crescat\SaloonSdkGenerator\Data\Generator\GeneratedCode $generatedCode,
    ): \Nette\PhpGenerator\PhpFile|array|null {
        // Store references needed by parent
        $this->generatedCode = $generatedCode;
        $this->specification = $specification;
        $this->config = $config;

        // Instantiate Plain JSON test generators
        $namespace = $config->namespace;
        $this->collectionTestGenerator = new PlainJsonCollectionTestGenerator($specification, $generatedCode, $namespace);
        $this->singularGetTestGenerator = new PlainJsonSingularGetTestGenerator($specification, $generatedCode, $namespace);

        $this->mutationTestGenerator = new PlainJsonMutationTestGenerator($specification, $generatedCode, $namespace);
        $this->deleteTestGenerator = new DeleteRequestTestGenerator($specification, $generatedCode, $namespace);

        // Continue with parent processing
        return $this->generatePestTests();
    }
}

/**
 * Plain JSON Collection Test Generator
 */
class PlainJsonCollectionTestGenerator extends CollectionRequestTestGenerator
{
    use PlainJsonDtoAssertions;

    /**
     * Override to include 'id' field in mock data (required by Model base class)
     * The parent's getPropertiesToSkipInTests doesn't help because 'id' isn't
     * a property in the DTO class (it's in the base Model class).
     */
    protected function generateMockAttributesFromDto(string $dtoClassName): array
    {
        $attributes = parent::generateMockAttributesFromDto($dtoClassName);

        // Always include id field (required by Model base class)
        // Use fixed value to ensure assertions match mock data
        $attributes['id'] = 'mock-id-123';

        return $attributes;
    }

    /**
     * Generate mock data for collection response - plain JSON array format
     */
    public function generateMockData(Endpoint $endpoint): array
    {
        $dtoClassName = $this->getDtoClassName($endpoint);
        $attributes = $this->generateMockAttributesFromDto($dtoClassName);

        unset($attributes['responseHeaders']);

        $response = $this->specification->components->schemas[$endpoint->response['schema']];

        if (array_key_exists('metadata', $response->properties)) {
            $attributes['metadata'] = ['totalCount' => 2, 'maxPageSize' => 100];
        }

        if (empty($attributes) || $attributes === ['name' => 'Mock value']) {
            throw new \RuntimeException("DTO '{$dtoClassName}' has no properties - skipping test generation");
        }

        // Return plain JSON array with two items (no JSON:API wrapper)
        return [
            $attributes,
            $attributes,
        ];
    }

    /**
     * Replace stub variables with collection-specific content
     */
    public function replaceStubVariables(string $functionStub, Endpoint $endpoint): string
    {
        // Remove JSON:API specific placeholders
        $functionStub = str_replace('{{ filterChain }}', '', $functionStub);
        $functionStub = str_replace('{{ filterAssertionBlock }}', '', $functionStub);
        $functionStub = str_replace('{{ includeChain }}', '', $functionStub);
        $functionStub = str_replace('{{ includeAssertion }}', '', $functionStub);
        $functionStub = str_replace('{{ relationshipAssertions }}', '', $functionStub);

        // Add query parameters
        $nonFilterParams = $this->getNonFilterQueryParameters($endpoint);
        $functionStub = str_replace('{{ nonFilterParams }}', $nonFilterParams, $functionStub);

        // Generate mock response
        $mockData = $this->generateMockData($endpoint);
        $mockResponseBody = $this->formatArrayAsPhp($mockData);

        $functionStub = preg_replace(
            "/MockResponse::fixture\('[^']+'\)/",
            "MockResponse::make($mockResponseBody, 200)",
            $functionStub
        );

        // Generate DTO assertions based on first item in collection
        $dtoAssertions = $this->generateDtoAssertions($mockData[0] ?? []);

        if (str_starts_with(trim($dtoAssertions), '//')) {
            $pattern = '/(.*\$response->status\(\)\)->toBe\(200\);.*?)(\n\s*\$dtoCollection = \$response->dto\(\);.*?{{ dtoAssertions }};)/s';
            $functionStub = preg_replace($pattern, '$1', $functionStub);
        } else {
            $functionStub = str_replace('{{ dtoAssertions }}', $dtoAssertions, $functionStub);
        }

        return $functionStub;
    }
}

/**
 * Plain JSON Singular Get Test Generator
 */
class PlainJsonSingularGetTestGenerator extends SingularGetRequestTestGenerator
{
    use PlainJsonDtoAssertions;

    /**
     * Override to include 'id' field in mock data (required by Model base class)
     * The parent's getPropertiesToSkipInTests doesn't help because 'id' isn't
     * a property in the DTO class (it's in the base Model class).
     */
    protected function generateMockAttributesFromDto(string $dtoClassName): array
    {
        $attributes = parent::generateMockAttributesFromDto($dtoClassName);

        // Always include id field (required by Model base class)
        // Use fixed value to ensure assertions match mock data
        $attributes['id'] = 'mock-id-123';

        return $attributes;
    }

    /**
     * Generate mock data for singular GET response - plain JSON object format
     */
    public function generateMockData(Endpoint $endpoint): array
    {
        $dtoClassName = $this->getDtoClassName($endpoint);
        $attributes = $this->generateMockAttributesFromDto($dtoClassName);

        unset($attributes['responseHeaders']);

        // Return plain JSON object (no JSON:API wrapper)
        return $attributes;
    }
}

/**
 * Plain JSON Mutation Test Generator
 * Overrides body validation to check plain JSON structure instead of JSON:API
 */
class PlainJsonMutationTestGenerator extends MutationRequestTestGenerator
{
    /**
     * Generate body validation code for plain JSON (no data/type/attributes wrapper)
     */
    protected function generateBodyValidation(Endpoint $endpoint): string
    {
        $attributeValidations = $this->generateAttributeValidationsFromDto($endpoint);

        $lines = [];

        $lines[] = '    $mockClient->assertSent(function (Request $request) {';

        if ($attributeValidations) {
            $lines[] = '        expect($request->body()->all())';
            $lines[] = $attributeValidations;
            $lines[] = '        ;';
        } else {
            // No attributes to validate
            $lines[] = '        expect($request->body()->all())->toBeArray();';
        }

        $lines[] = '';
        $lines[] = '        return true;';
        $lines[] = '    });';

        return implode("\n", $lines);
    }
}
