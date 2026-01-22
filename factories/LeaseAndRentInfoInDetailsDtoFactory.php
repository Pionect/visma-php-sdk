<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LeaseAndRentInfoInDetailsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LeaseAndRentInfoInDetailsDtoFactory extends Factory
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
        return LeaseAndRentInfoInDetailsDto::class;
    }
}
