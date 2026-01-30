<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * A free custom colum of type int
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomInt2inShipmentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomInt2inShipmentUpdateDtoFactory factory()
 */
class CustomInt2inShipmentUpdateDto extends Model
{
    public function __construct(
        public ?int $value = null,
    ) {}
}
