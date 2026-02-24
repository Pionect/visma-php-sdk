<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LeaseAndRentInfoInDetailsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\LeaseAndRentInfoInDetailsDto>
 */
class LeaseAndRentInfoInDetailsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lessorId' => $this->faker->uuid(),
            'lessorName' => $this->faker->company(),
            'leaseRentTerm' => $this->faker->numberBetween(1, 100),
            'leaseNumber' => $this->faker->word(),
            'rentAmount' => null,
            'retailCost' => null,
            'manufacturingYear' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return LeaseAndRentInfoInDetailsDto::class;
    }
}
