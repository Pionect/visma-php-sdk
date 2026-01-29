<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Bank address 2
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BankAddress2inBankSettingsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BankAddress2inBankSettingsUpdateDtoFactory factory()
 */
class BankAddress2inBankSettingsUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
