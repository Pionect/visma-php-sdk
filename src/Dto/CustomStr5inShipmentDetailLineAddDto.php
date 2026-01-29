<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type string with max length 100.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomStr5inShipmentDetailLineAddDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomStr5inShipmentDetailLineAddDtoFactory factory()
 */
class CustomStr5inShipmentDetailLineAddDto extends Model
{
    #[Property]
    public ?string $value;
}
