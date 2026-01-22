<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The ID of the attribute on the line.
 */
class AttributeIdInAttributeLineUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
