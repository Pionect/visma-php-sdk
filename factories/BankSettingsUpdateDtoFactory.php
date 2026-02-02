<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BankSettingsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BankSettingsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'bankName' => $this->faker->company(),
            'bankAddress1' => null,
            'bankAddress2' => null,
            'bankAddress3' => null,
            'bankCountry' => null,
            'iban' => null,
            'bban' => null,
            'bbaN2' => null,
            'bbaN3' => null,
            'bic' => null,
            'creditorId' => null,
        ];
    }

    protected function modelClass(): string
    {
        return BankSettingsUpdateDto::class;
    }
}
