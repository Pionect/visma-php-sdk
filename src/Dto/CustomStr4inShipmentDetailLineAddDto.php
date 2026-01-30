<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type string with max length 100.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomStr4inShipmentDetailLineAddDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomStr4inShipmentDetailLineAddDtoFactory factory()
 */
class CustomStr4inShipmentDetailLineAddDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
