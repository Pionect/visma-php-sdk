<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type string with max length 100.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomStr5inShipmentCreateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomStr5inShipmentCreateDtoFactory factory()
 */
class CustomStr5inShipmentCreateDto extends Model
{
    #[Property]
    public ?string $value;
}
