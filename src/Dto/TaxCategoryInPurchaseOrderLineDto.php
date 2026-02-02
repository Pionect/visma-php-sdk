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
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
