<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a CustomerSalesPrice in CustomerSalesPriceController.
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerSalesPriceDtoFactory testFactory()
 */
class CustomerSalesPriceDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $recordId = null,
        public ?string $priceType = null,
        public ?string $priceCode = null,
        public ?string $inventoryId = null,
        public ?string $description = null,
        public ?string $uoM = null,
        public ?bool $promotion = null,
        public int|float|null $breakQty = null,
        public int|float|null $price = null,
        public ?string $currency = null,
        public ?string $vat = null,
        public ?\Carbon\Carbon $effectiveDate = null,
        public ?\Carbon\Carbon $expirationDate = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $warehouse = null,
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
