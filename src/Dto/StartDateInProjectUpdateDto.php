<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field
 */
class StartDateInProjectUpdateDto extends Model
{
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $value;
}
