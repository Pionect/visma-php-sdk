<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\KitAssemblyQueryParametersFactory testFactory()
 */
class KitAssemblyQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?string $createdDateTime = null,
        public ?string $createdDateTimeCondition = null,
        public ?string $type = null,
        public ?string $refNo = null,
        public ?string $status = null,
        public ?bool $expandStockComponents = null,
        public ?bool $expandNonStockComponents = null,
        public ?bool $expandKitAllocations = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
