<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LeaseAndRentInfoDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\LeaseAndRentInfoDto>
 */
class LeaseAndRentInfoDtoFactory extends Factory
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
        return LeaseAndRentInfoDto::class;
    }
}
