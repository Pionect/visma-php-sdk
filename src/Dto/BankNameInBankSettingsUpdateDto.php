<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Bank name
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BankNameInBankSettingsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BankNameInBankSettingsUpdateDtoFactory factory()
 */
class BankNameInBankSettingsUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
