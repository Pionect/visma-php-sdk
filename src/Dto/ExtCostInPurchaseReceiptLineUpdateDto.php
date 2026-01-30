<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The extended cost of the item, which is the unit price multiplied by
 * the quantity.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExtCostInPurchaseReceiptLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExtCostInPurchaseReceiptLineUpdateDtoFactory factory()
 */
class ExtCostInPurchaseReceiptLineUpdateDto extends Model
{
    public function __construct(
        public int|float|null $value = null,
    ) {}
}
