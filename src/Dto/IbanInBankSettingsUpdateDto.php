<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * IBAN
 */
class IbanInBankSettingsUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
