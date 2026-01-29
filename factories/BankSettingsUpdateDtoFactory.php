<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BankSettingsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BankSettingsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'bankName' => BankNameInBankSettingsUpdateDtoFactory::new()->make(),
            'bankAddress1' => BankAddress1InBankSettingsUpdateDtoFactory::new()->make(),
            'bankAddress2' => BankAddress2InBankSettingsUpdateDtoFactory::new()->make(),
            'bankAddress3' => BankAddress3InBankSettingsUpdateDtoFactory::new()->make(),
            'bankCountry' => BankCountryInBankSettingsUpdateDtoFactory::new()->make(),
            'iban' => IbanInBankSettingsUpdateDtoFactory::new()->make(),
            'bban' => BbanInBankSettingsUpdateDtoFactory::new()->make(),
            'bbaN2' => BbaN2InBankSettingsUpdateDtoFactory::new()->make(),
            'bbaN3' => BbaN3InBankSettingsUpdateDtoFactory::new()->make(),
            'bic' => BicInBankSettingsUpdateDtoFactory::new()->make(),
            'creditorId' => CreditorIdInBankSettingsUpdateDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return BankSettingsUpdateDto::class;
    }
}
