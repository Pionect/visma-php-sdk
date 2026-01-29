<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Creditor Id
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreditorIdInBankSettingsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreditorIdInBankSettingsUpdateDtoFactory factory()
 */
class CreditorIdInBankSettingsUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
