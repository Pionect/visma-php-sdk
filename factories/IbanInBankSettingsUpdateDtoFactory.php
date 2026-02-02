<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\IbanInBankSettingsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class IbanInBankSettingsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return IbanInBankSettingsUpdateDto::class;
    }
}
