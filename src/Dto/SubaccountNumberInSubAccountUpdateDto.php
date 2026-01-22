<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field, identifies the subaccount to update.
 */
class SubaccountNumberInSubAccountUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
