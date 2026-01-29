<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BarCodeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BarCodeDtoFactory factory()
 */
class BarCodeDto extends Model
{
    #[Property]
    public ?string $barCode;

    #[Property]
    public ?string $inventoryNumber;
}
