<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SocommissionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SocommissionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'salesPersonId' => $this->faker->uuid(),
            'commissionPercent' => $this->faker->randomFloat(2, 0, 1000),
            'commissionAmount' => $this->faker->randomFloat(2, 0, 1000),
            'commissionableAmount' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return SocommissionDto::class;
    }
}
