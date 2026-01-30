<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\KitAssemblyQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\KitAssemblyQueryParametersFactory factory()
 */
class KitAssemblyQueryParameters extends Model
{
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
