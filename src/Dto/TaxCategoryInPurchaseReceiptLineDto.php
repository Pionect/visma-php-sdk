<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Document details tab &gt; VAT category &gt; The VAT category assigned to the stock item.
 *
 * @method static \Pionect\VismaSdk\Factories\TaxCategoryInPurchaseReceiptLineDtoFactory testFactory()
 */
class TaxCategoryInPurchaseReceiptLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
