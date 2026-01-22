<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\RotRutDistributionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class RotRutDistributionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'personalId' => $this->faker->uuid(),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'extra' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return RotRutDistributionDto::class;
    }
}
