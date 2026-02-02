<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\NumberingDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class NumberingDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'numberingId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'manualNumbering' => $this->faker->boolean(),
            'newNumberSymbol' => $this->faker->word(),
            'sequence' => [],
        ];
    }

    protected function modelClass(): string
    {
        return NumberingDto::class;
    }
}
