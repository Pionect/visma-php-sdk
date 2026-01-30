<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type string with max length 100.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomStr3inShipmentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomStr3inShipmentUpdateDtoFactory testFactory()
 */
class CustomStr3inShipmentUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
