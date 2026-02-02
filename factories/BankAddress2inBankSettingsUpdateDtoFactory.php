<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BankAddress2inBankSettingsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BankAddress2inBankSettingsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return BankAddress2inBankSettingsUpdateDto::class;
    }
}
