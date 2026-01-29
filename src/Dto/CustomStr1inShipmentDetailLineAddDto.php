<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type string with max length 100.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomStr1inShipmentDetailLineAddDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomStr1inShipmentDetailLineAddDtoFactory factory()
 */
class CustomStr1inShipmentDetailLineAddDto extends Model
{
    #[Property]
    public ?string $value;
}
