<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type int
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomInt1inShipmentCreateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomInt1inShipmentCreateDtoFactory testFactory()
 */
class CustomInt1inShipmentCreateDto extends Model
{
    public function __construct(
        public ?int $value = null,
    ) {}
}
