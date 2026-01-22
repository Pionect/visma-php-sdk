<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BankAddress1inBankSettingsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BankAddress1inBankSettingsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return BankAddress1inBankSettingsUpdateDto::class;
    }
}
