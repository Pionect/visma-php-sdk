<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Primary item validation &gt; An option indicating whether the operations with the primary item
 * should be validated for this location and how.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PrimaryItemValidInWarehouseLocationUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PrimaryItemValidInWarehouseLocationUpdateDtoFactory factory()
 */
class PrimaryItemValidInWarehouseLocationUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
