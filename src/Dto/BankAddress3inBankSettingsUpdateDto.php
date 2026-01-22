<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Bank address 3
 */
class BankAddress3inBankSettingsUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
