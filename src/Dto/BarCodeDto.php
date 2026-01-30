<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BarCodeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BarCodeDtoFactory factory()
 */
class BarCodeDto extends Model
{
    public function __construct(
        public ?string $barCode = null,
        public ?string $inventoryNumber = null,
    ) {}
}
