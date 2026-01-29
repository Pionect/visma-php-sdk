<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * UoM &gt; The unit of measure for the specified quantity of the inventory item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\UomInAllocationsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\UomInAllocationsUpdateDtoFactory factory()
 */
class UomInAllocationsUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
