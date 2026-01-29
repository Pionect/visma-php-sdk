<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * IBAN
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\IbanInBankSettingsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\IbanInBankSettingsUpdateDtoFactory factory()
 */
class IbanInBankSettingsUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
