<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BankAddress3inBankSettingsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BankAddress3inBankSettingsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return BankAddress3inBankSettingsUpdateDto::class;
    }
}
