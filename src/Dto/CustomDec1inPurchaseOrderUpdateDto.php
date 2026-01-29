<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type decimal with max 4 decimals.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomDec1inPurchaseOrderUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomDec1inPurchaseOrderUpdateDtoFactory factory()
 */
class CustomDec1inPurchaseOrderUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
