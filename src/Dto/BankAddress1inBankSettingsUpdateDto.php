<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Bank address 1
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BankAddress1inBankSettingsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BankAddress1inBankSettingsUpdateDtoFactory factory()
 */
class BankAddress1inBankSettingsUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
