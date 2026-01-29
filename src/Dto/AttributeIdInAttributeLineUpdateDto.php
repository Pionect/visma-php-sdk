<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The ID of the attribute on the line.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AttributeIdInAttributeLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AttributeIdInAttributeLineUpdateDtoFactory factory()
 */
class AttributeIdInAttributeLineUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
