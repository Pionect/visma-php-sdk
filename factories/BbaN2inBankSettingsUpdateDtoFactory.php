<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BbaN2inBankSettingsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BbaN2inBankSettingsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return BbaN2inBankSettingsUpdateDto::class;
    }
}
