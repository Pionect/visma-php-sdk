<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Description &gt; A brief description of the warehouse location.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DescriptionInWarehouseLocationUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DescriptionInWarehouseLocationUpdateDtoFactory factory()
 */
class DescriptionInWarehouseLocationUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
