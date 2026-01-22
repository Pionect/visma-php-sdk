<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * BBAN 2
 */
class BbaN2inBankSettingsUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
