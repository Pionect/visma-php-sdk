<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type decimal with max 4 decimals.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomDec2inShipmentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomDec2inShipmentUpdateDtoFactory testFactory()
 */
class CustomDec2inShipmentUpdateDto extends Model
{
    public function __construct(
        public int|float|null $value = null,
    ) {}
}
