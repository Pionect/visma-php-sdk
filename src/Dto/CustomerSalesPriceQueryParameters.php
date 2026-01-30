<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerSalesPriceQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerSalesPriceQueryParametersFactory testFactory()
 */
class CustomerSalesPriceQueryParameters extends Model
{
    public function __construct(
        public ?string $greaterThanValue = null,
        public ?int $numberToRead = null,
        public ?int $skipRecords = null,
        public ?string $priceType = null,
        public ?string $priceCode = null,
        public ?string $inventoryId = null,
        public ?\Carbon\Carbon $effectiveAsOf = null,
        public ?string $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
