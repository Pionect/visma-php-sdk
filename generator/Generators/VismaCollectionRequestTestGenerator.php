<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Generator\Generators;

use Crescat\SaloonSdkGenerator\Data\Generator\ApiSpecification;
use Crescat\SaloonSdkGenerator\Data\Generator\Endpoint;
use Crescat\SaloonSdkGenerator\Data\Generator\GeneratedCode;
use Crescat\SaloonSdkGenerator\Generators\TestGenerators\CollectionRequestTestGenerator;
use Pionect\VismaSdk\Generator\Helpers\VismaDtoResolver;

class VismaCollectionRequestTestGenerator extends CollectionRequestTestGenerator
{
    public function __construct(
        ApiSpecification $specification,
        GeneratedCode $generatedCode,
        string $namespace,
        VismaDtoResolver $dtoResolver
    ) {
        parent::__construct($specification, $generatedCode, $namespace, $dtoResolver);
    }

    /**
     * Generate mock data for collection response.
     * Wraps in BasePaginationDto structure if needed.
     */
    protected function generateMockData(Endpoint $endpoint): array
    {
        // Generate mock data for a single item using the unwrapped DTO
        $singleItem = $this->generateMockAttributesFromDto($this->getDtoClassName($endpoint));

        // Check if response is wrapped in BasePaginationDto
        // Cast to PlainJsonDtoResolver to access custom method
        if ($this->dtoResolver instanceof VismaDtoResolver && $this->dtoResolver->isBasePaginationResponse($endpoint)) {
            // Return wrapped structure
            return [
                'pageNumber' => 1,
                'pageSize' => 2,
                'totalCount' => 2,
                'records' => [$singleItem, $singleItem],
            ];
        }

        // Return plain array
        return [$singleItem, $singleItem];
    }
}
