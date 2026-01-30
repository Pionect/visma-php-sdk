<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a CustomerSalesPrice in CustomerSalesPriceController.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerSalesPriceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerSalesPriceDtoFactory factory()
 */
class CustomerSalesPriceDto extends Model
{
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
