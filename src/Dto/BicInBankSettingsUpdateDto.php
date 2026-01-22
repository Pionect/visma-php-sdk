<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * BIC
 */
class BicInBankSettingsUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
