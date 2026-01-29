<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PrebookingUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PrebookingUpdateDtoFactory factory()
 */
class PrebookingUpdateDto extends Model
{
    #[Property]
    public ?accountNumberInPrebookingUpdateDto $accountNumber;

    /** Subaccount used for prebooking. */
    #[Property]
    public ?array $subaccount;
}
