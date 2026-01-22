<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BankNameInBankSettingsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BankNameInBankSettingsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return BankNameInBankSettingsUpdateDto::class;
    }
}
