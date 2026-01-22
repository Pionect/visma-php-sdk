<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field
 */
class DescriptionInProjectUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
