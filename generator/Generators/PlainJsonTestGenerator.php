<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Generator\Generators;

use Crescat\SaloonSdkGenerator\Data\Generator\Endpoint;
use Pionect\VismaSdk\Generator\Generators\Traits\PlainJsonDtoAssertions;
use Timatic\JsonApiSdk\Generators\JsonApiPestTestGenerator;
use Timatic\JsonApiSdk\Generators\TestGenerators\CollectionRequestTestGenerator;
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

        // Continue with parent processing
        return parent::process($config, $specification, $generatedCode);
    }
}

/**
 * Plain JSON Collection Test Generator
 */
class PlainJsonCollectionTestGenerator extends CollectionRequestTestGenerator
{
    use PlainJsonDtoAssertions;

    /**
     * Generate mock data for collection response - plain JSON array format
     */
    public function generateMockData(Endpoint $endpoint): array
    {
        $dtoClassName = $this->getDtoClassName($endpoint);
        $attributes = $this->generateMockAttributesFromDto($dtoClassName);

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
     * Generate mock data for singular GET response - plain JSON object format
     */
    public function generateMockData(Endpoint $endpoint): array
    {
        $dtoClassName = $this->getDtoClassName($endpoint);
        $attributes = $this->generateMockAttributesFromDto($dtoClassName);

        // Return plain JSON object (no JSON:API wrapper)
        return $attributes;
    }

    /**
     * Replace stub variables with singular GET-specific content
     */
    public function replaceStubVariables(string $functionStub, Endpoint $endpoint): string
    {
        $mockData = $this->generateMockData($endpoint);
        $mockResponseBody = $this->formatArrayAsPhp($mockData);

        $functionStub = str_replace(
            '{{ mockResponse }}',
            "MockResponse::make($mockResponseBody, 200)",
            $functionStub
        );

        // Generate DTO assertions based on mock data
        $dtoAssertions = $this->generateDtoAssertions($mockData);

        if (str_starts_with(trim($dtoAssertions), '//')) {
            $pattern = '/(.*\$response->status\(\)\)->toBe\(200\);.*?)(\n\s*\$dto = \$response->dto\(\);.*?{{ dtoAssertions }};)/s';
            $functionStub = preg_replace($pattern, '$1', $functionStub);
        } else {
            $functionStub = str_replace('{{ dtoAssertions }}', $dtoAssertions, $functionStub);
        }

        return $functionStub;
    }
}
