<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Generator\Generators;

use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Crescat\SaloonSdkGenerator\Data\Generator\Endpoint;
use Crescat\SaloonSdkGenerator\Generators\RequestGenerator;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Method;
use Saloon\PaginationPlugin\Contracts\Paginatable;

class PlainJsonRequestGenerator extends RequestGenerator
{
    public function __construct(?Config $config = null)
    {
        parent::__construct($config);

        // Configure for plain JSON format
        $this->responseDataPath = null;
    }

    /**
     * Customize request class for plain JSON API.
     * Add Paginatable interface to collection requests and hydration support.
     */
    protected function customizeRequestClass(ClassType $classType, $namespace, Endpoint $endpoint): void
    {
        // Add Paginatable interface to collection requests
        if ($this->isCollectionRequest($endpoint)) {
            $namespace->addUse(Paginatable::class);
            $classType->addImplement(Paginatable::class);
        }

        // Call parent to add hydration support
        parent::customizeRequestClass($classType, $namespace, $endpoint);
    }

    /**
     * Allow all query parameters for plain JSON API.
     */
    protected function shouldIncludeQueryParameter(string $paramName): bool
    {
        return true;
    }

    /**
     * Generate the body of createDtoFromResponse method for Visma API.
     * Handles BasePaginationDtoOf* wrapper format and plain JSON responses.
     */
    protected function addHydrationMethodBody(Method $method, Endpoint $endpoint, string $dtoClassName): void
    {
        // Check if this is a BasePaginationDtoOf* wrapper (Visma-specific format)
        $isBasePagination = preg_match('/^BasePaginationDtoOf(.+)Dto$/', $dtoClassName, $matches);

        if ($isBasePagination) {
            // Extract actual item DTO name (e.g., "CustomerDto" from "BasePaginationDtoOfCustomerDto")
            $itemDtoClassName = $matches[1].'Dto';
        } else {
            $itemDtoClassName = $dtoClassName;
        }

        if ($this->isCollectionRequest($endpoint)) {
            // Collection: extract from 'records' for BasePaginationDto, or root for standard arrays
            if ($isBasePagination) {
                $method->addBody('$data = $response->json(\'records\');');
            } else {
                $method->addBody('$data = $response->json();');
            }
            $method->addBody('');
            $method->addBody('return collect($data)->map(');
            $method->addBody('    fn(array $item) => '.$itemDtoClassName.'::from($item)');
            $method->addBody(');');
        } else {
            // Single resource: extract from root
            $method->addBody('return '.$itemDtoClassName.'::from($response->json());');
        }
    }
}
