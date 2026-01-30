<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Bank settings update Dto
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BankSettingsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BankSettingsUpdateDtoFactory factory()
 */
class BankSettingsUpdateDto extends Model
{
    public function __construct(
        public ?BankNameInBankSettingsUpdateDto $bankName = null,
        public ?BankAddress1inBankSettingsUpdateDto $bankAddress1 = null,
        public ?BankAddress2inBankSettingsUpdateDto $bankAddress2 = null,
        public ?BankAddress3inBankSettingsUpdateDto $bankAddress3 = null,
        public ?BankCountryInBankSettingsUpdateDto $bankCountry = null,
        public ?IbanInBankSettingsUpdateDto $iban = null,
        public ?BbanInBankSettingsUpdateDto $bban = null,
        public ?BbaN2inBankSettingsUpdateDto $bbaN2 = null,
        public ?BbaN3inBankSettingsUpdateDto $bbaN3 = null,
        public ?BicInBankSettingsUpdateDto $bic = null,
        public ?CreditorIdInBankSettingsUpdateDto $creditorId = null,
    ) {}
}
