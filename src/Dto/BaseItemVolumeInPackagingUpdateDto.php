<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The volume of the <see cref="!:BaseUnit">Base Unit</see> of the item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BaseItemVolumeInPackagingUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BaseItemVolumeInPackagingUpdateDtoFactory factory()
 */
class BaseItemVolumeInPackagingUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
