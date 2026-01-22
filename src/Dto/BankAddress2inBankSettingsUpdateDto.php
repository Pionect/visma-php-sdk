<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Bank address 2
 */
class BankAddress2inBankSettingsUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
