<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type int
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomInt2inPurchaseOrderUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomInt2inPurchaseOrderUpdateDtoFactory factory()
 */
class CustomInt2inPurchaseOrderUpdateDto extends Model
{
    #[Property]
    public ?int $value;
}
