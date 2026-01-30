<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type decimal with max 4 decimals.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomDec2inPurchaseOrderLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomDec2inPurchaseOrderLineUpdateDtoFactory testFactory()
 */
class CustomDec2inPurchaseOrderLineUpdateDto extends Model
{
    public function __construct(
        public int|float|null $value = null,
    ) {}
}
