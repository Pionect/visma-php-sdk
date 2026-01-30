<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * VAT category &gt; The VAT category assigned to the ordered stock item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TaxCategoryInPurchaseOrderLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TaxCategoryInPurchaseOrderLineDtoFactory factory()
 */
class TaxCategoryInPurchaseOrderLineDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
