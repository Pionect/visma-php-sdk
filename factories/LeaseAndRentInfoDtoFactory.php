<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LeaseAndRentInfoDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LeaseAndRentInfoDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lessorId' => $this->faker->uuid(),
            'lessorName' => $this->faker->company(),
            'leaseRentTerm' => $this->faker->numberBetween(1, 100),
            'leaseNumber' => $this->faker->word(),
            'rentAmount' => $this->faker->randomFloat(2, 0, 1000),
            'retailCost' => $this->faker->randomFloat(2, 0, 1000),
            'manufacturingYear' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return LeaseAndRentInfoDto::class;
    }
}
