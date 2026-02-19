<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Generator\Generators;

use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Crescat\SaloonSdkGenerator\Data\Generator\Endpoint;
use Crescat\SaloonSdkGenerator\Generators\RequestGenerator;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Method;
use Pionect\VismaSdk\Generator\Helpers\VismaDtoResolver;
use Saloon\PaginationPlugin\Contracts\Paginatable;

class VismaRequestGenerator extends RequestGenerator
{
    public function __construct(?Config $config = null)
    {
        parent::__construct($config);

        // Replace with custom resolver that unwraps BasePaginationDto
        if ($config) {
            $this->dtoResolver = new VismaDtoResolver($config);
        }

        // Configure for plain JSON format
        $this->responseDataPath = null;
    }

    /**
     * Customize request class for plain JSON API.
     * Add Paginatable interface to collection requests and hydration support.
     */
    protected function customizeRequestClass(ClassType $classType, $namespace, Endpoint $endpoint): void
    {
        // For mutation requests (POST, PUT, PATCH), use VismaMutationRequest
        if ($this->isMutationRequest($endpoint)) {
            $namespace->addUse(\Pionect\VismaSdk\Foundation\Requests\VismaMutationRequest::class);
            $classType->setExtends(\Pionect\VismaSdk\Foundation\Requests\VismaMutationRequest::class);

            // Remove HasBody and HasJsonBody since they're now in VismaMutationRequest
            $classType->removeImplement(\Saloon\Contracts\Body\HasBody::class);
            $classType->removeTrait(\Saloon\Traits\Body\HasJsonBody::class);
        }

        // Add Paginatable interface to collection requests
        if ($this->isCollectionRequest($endpoint)) {
            $namespace->addUse(Paginatable::class);
            $classType->addImplement(Paginatable::class);
        }

        // Call parent to add hydration support
        parent::customizeRequestClass($classType, $namespace, $endpoint);
    }

    /**
     * Override to prevent generating defaultBody() method for mutation requests
     * since VismaMutationRequest provides it with null filtering.
     */
    protected function addRequestBodyParameter(Endpoint $endpoint, $namespace, $classConstructor, $classType): void
    {
        parent::addRequestBodyParameter($endpoint, $namespace, $classConstructor, $classType);

        // Remove the defaultBody method for mutation requests - it's provided by VismaMutationRequest
        if ($this->isMutationRequest($endpoint) && $classType->hasMethod('defaultBody')) {
            $classType->removeMethod('defaultBody');
        }
    }

    /**
     * Generate the body of createDtoFromResponse method for Visma API.
     * Handles BasePaginationDtoOf* wrapper format and plain JSON responses.
     */
    protected function addHydrationMethodBody(Method $method, Endpoint $endpoint, string $dtoClassName): void
    {
        // Check if the original response schema is BasePaginationDto
        $isBasePagination = $this->dtoResolver->isBasePaginationResponse($endpoint);

        if ($this->isCollectionRequest($endpoint)) {
            // Collection: extract from 'records' for BasePaginationDto, or root for standard arrays
            if ($isBasePagination) {
                $method->addBody('$data = $response->json(\'records\');');
            } else {
                $method->addBody('$data = $response->json();');
            }
            $method->addBody('');
            $method->addBody('return collect($data)->map(');
            $method->addBody('    fn (array $item) => '.$dtoClassName.'::from($item)');
            $method->addBody(');');
        } else {
            // Single resource: extract from root
            $method->addBody('return '.$dtoClassName.'::from($response->json());');
        }
    }
}
