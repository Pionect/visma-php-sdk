<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Generator\Generators;

use Crescat\SaloonSdkGenerator\Data\Generator\Endpoint;
use Crescat\SaloonSdkGenerator\Data\Generator\Parameter;
use Crescat\SaloonSdkGenerator\Helpers\MethodGeneratorHelper;
use Nette\PhpGenerator\ClassType;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\Contracts\Paginatable;
use Timatic\JsonApiSdk\Generators\JsonApiRequestGenerator;

class PlainJsonRequestGenerator extends JsonApiRequestGenerator
{
    /**
     * Customize request class for plain JSON API.
     * Skip HasFilters and HasIncludes traits.
     */
    protected function customizeRequestClass(ClassType $classType, $namespace, Endpoint $endpoint): void
    {
        if ($this->isCollectionRequest($endpoint)) {
            // Add Paginatable interface to all collection requests
            $namespace->addUse(Paginatable::class);
            $classType->addImplement(Paginatable::class);
        }

        // Skip HasFilters, HasIncludes, addIncludeMethods for plain JSON API

        // Add hydration support to GET, POST, PUT, and PATCH requests
        if ($this->shouldHaveHydration($endpoint)) {
            $this->addHydrationSupport($classType, $namespace, $endpoint);
        }
    }

    /**
     * Customize constructor for mutation requests.
     * Use toArray() instead of toJsonApi() for plain JSON.
     */
    protected function customizeConstructor($classConstructor, ClassType $classType, $namespace, Endpoint $endpoint): void
    {
        if (! $this->isMutationRequest($endpoint)) {
            return;
        }

        $modelClass = $this->foundationClass('Hydration\\Model');
        $namespace->addUse($modelClass);

        $dataParam = new Parameter(
            type: '\\'.$modelClass.'|array|null',
            nullable: true,
            name: 'data',
            description: 'Request data',
        );

        MethodGeneratorHelper::addParameterAsPromotedProperty($classConstructor, $dataParam);

        // Use toArray() for plain JSON instead of toJsonApi()
        $classType->addMethod('defaultBody')
            ->setProtected()
            ->setReturnType('array')
            ->addBody('if ($this->data instanceof Model) {')
            ->addBody('    return $this->data->toArray();')
            ->addBody('}')
            ->addBody('')
            ->addBody('return $this->data ?? [];');
    }

    /**
     * Skip include methods for plain JSON API.
     */
    protected function addIncludeMethods(ClassType $classType, $namespace, Endpoint $endpoint): void
    {
        // No-op: plain JSON APIs don't have JSON:API include mechanism
    }

    /**
     * Allow all query parameters for plain JSON API.
     */
    protected function shouldIncludeQueryParameter(string $paramName): bool
    {
        return true;
    }

    /**
     * Add hydration support with plain JSON response handling.
     * No 'data' or 'included' wrapper.
     */
    protected function addHydrationSupport(ClassType $classType, $namespace, Endpoint $endpoint): void
    {
        // Determine DTO class name from endpoint
        $dtoClassName = $this->getDtoClassName($endpoint);

        // Check if this is a BasePaginationDtoOf* wrapper (Visma-specific format)
        $isBasePagination = false;
        $itemDtoClassName = $dtoClassName;

        if (preg_match('/^BasePaginationDtoOf(.+)Dto$/', $dtoClassName, $matches)) {
            // This is a BasePaginationDto wrapper - extract the item DTO name
            $isBasePagination = true;
            $itemDtoClassName = $matches[1].'Dto';
        }

        // Get Foundation classes with target namespace
        $hydratorClass = $this->foundationClass('Hydration\\Facades\\Hydrator');

        // Add imports
        $namespace->addUse($hydratorClass);
        $namespace->addUse(Response::class);
        $namespace->addUse("{$this->config->namespace}\\Dto\\{$itemDtoClassName}");

        // Add $model property - use the item DTO class name
        $classType->addProperty('model')
            ->setProtected()
            ->setValue(new \Nette\PhpGenerator\Literal("{$itemDtoClassName}::class"));

        // Add createDtoFromResponse method
        $method = $classType->addMethod('createDtoFromResponse')
            ->setReturnType('mixed');

        $param = $method->addParameter('response');
        $param->setType(Response::class);

        // Use appropriate hydration method based on request type
        // Plain JSON: use response->json() directly (no 'data' wrapper)
        if ($this->isCollectionRequest($endpoint)) {
            // Collection: use hydrateCollection
            $method->addBody('return Hydrator::hydrateCollection(');
            $method->addBody('    $this->model,');

            // For BasePaginationDto format, extract records from the response
            if ($isBasePagination) {
                $method->addBody('    $response->json(\'records\')');
            } else {
                // Standard plain JSON format
                $method->addBody('    $response->json()');
            }

            $method->addBody(');');
        } else {
            // Single resource: use hydrate
            $method->addBody('return Hydrator::hydrate(');
            $method->addBody('    $this->model,');
            $method->addBody('    $response->json()');
            $method->addBody(');');
        }
    }

    /**
     * Include PUT requests for plain JSON API.
     */
    protected function isMutationRequest(Endpoint $endpoint): bool
    {
        return $endpoint->method->isPost()
            || $endpoint->method->isPatch()
            || $endpoint->method->isPut();
    }
}
