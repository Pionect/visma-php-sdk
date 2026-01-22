<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BbanInBankSettingsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BbanInBankSettingsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return BbanInBankSettingsUpdateDto::class;
    }
}
