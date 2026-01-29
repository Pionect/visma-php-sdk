<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field, identifies the subaccount to update.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SubaccountNumberInSubAccountUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SubaccountNumberInSubAccountUpdateDtoFactory factory()
 */
class SubaccountNumberInSubAccountUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
