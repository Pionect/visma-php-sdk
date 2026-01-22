<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class PrebookingUpdateDto extends Model
{
    #[Property]
    public ?\accountNumberInPrebookingUpdateDto $accountNumber;

    /** Subaccount used for prebooking. */
    #[Property]
    public ?array $subaccount;
}
