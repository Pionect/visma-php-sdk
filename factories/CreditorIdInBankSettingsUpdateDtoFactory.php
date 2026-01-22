<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CreditorIdInBankSettingsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CreditorIdInBankSettingsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CreditorIdInBankSettingsUpdateDto::class;
    }
}
