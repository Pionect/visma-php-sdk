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
            'totalDeductableAmount' => null,
            'otherCost' => null,
            'materialCost' => null,
            'workPrice' => null,
            'distributedAmount' => null,
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
