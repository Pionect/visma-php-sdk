<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\UnitOfMeasureDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class UnitOfMeasureDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'fromUnit' => $this->faker->word(),
            'toUnit' => $this->faker->word(),
            'unitMultDiv' => $this->faker->word(),
            'unitRate' => $this->faker->randomFloat(2, 0, 1000),
            'supplementaryMeasureUnit' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return UnitOfMeasureDto::class;
    }
}
