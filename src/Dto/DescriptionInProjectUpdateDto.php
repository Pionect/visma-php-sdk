<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DescriptionInProjectUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DescriptionInProjectUpdateDtoFactory factory()
 */
class DescriptionInProjectUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
