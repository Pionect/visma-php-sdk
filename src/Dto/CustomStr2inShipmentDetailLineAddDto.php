<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type string with max length 100.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomStr2inShipmentDetailLineAddDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomStr2inShipmentDetailLineAddDtoFactory testFactory()
 */
class CustomStr2inShipmentDetailLineAddDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
