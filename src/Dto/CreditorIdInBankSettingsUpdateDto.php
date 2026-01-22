<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Creditor Id
 */
class CreditorIdInBankSettingsUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
