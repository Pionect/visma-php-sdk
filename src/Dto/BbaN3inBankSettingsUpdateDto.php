<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * BBAN 3
 */
class BbaN3inBankSettingsUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
