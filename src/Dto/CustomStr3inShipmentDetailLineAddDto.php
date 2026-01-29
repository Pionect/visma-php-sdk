<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type string with max length 100.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomStr3inShipmentDetailLineAddDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomStr3inShipmentDetailLineAddDtoFactory factory()
 */
class CustomStr3inShipmentDetailLineAddDto extends Model
{
    #[Property]
    public ?string $value;
}
