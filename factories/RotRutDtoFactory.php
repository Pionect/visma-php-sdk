<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\RotRutDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class RotRutDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'docType' => $this->faker->word(),
            'refNbr' => $this->faker->word(),
            'distributedAutomaticaly' => $this->faker->boolean(),
            'type' => $this->faker->word(),
            'totalDeductableAmount' => $this->faker->randomFloat(2, 0, 1000),
            'otherCost' => $this->faker->randomFloat(2, 0, 1000),
            'materialCost' => $this->faker->randomFloat(2, 0, 1000),
            'workPrice' => $this->faker->randomFloat(2, 0, 1000),
            'distributedAmount' => $this->faker->randomFloat(2, 0, 1000),
            'appartment' => $this->faker->word(),
            'estate' => $this->faker->word(),
            'organizationNbr' => $this->faker->word(),
            'distribution' => [],
        ];
    }

    protected function modelClass(): string
    {
        return RotRutDto::class;
    }
}
