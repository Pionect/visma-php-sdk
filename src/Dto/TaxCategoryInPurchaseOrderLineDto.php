<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * VAT category &gt; The VAT category assigned to the ordered stock item.
 *
 * @method static \Pionect\VismaSdk\Factories\TaxCategoryInPurchaseOrderLineDtoFactory testFactory()
 */
class TaxCategoryInPurchaseOrderLineDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\TaxCategoryInPurchaseOrderLineDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
