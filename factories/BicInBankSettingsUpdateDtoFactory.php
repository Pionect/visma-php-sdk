<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BicInBankSettingsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BicInBankSettingsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return BicInBankSettingsUpdateDto::class;
    }
}
