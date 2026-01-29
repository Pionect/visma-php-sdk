<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The weight of the <see cref="!:BaseUnit">Base Unit</see> of the item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BaseItemWeightInPackagingUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BaseItemWeightInPackagingUpdateDtoFactory factory()
 */
class BaseItemWeightInPackagingUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
