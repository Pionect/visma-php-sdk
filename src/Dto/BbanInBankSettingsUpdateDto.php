<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * BBAN
 */
class BbanInBankSettingsUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
