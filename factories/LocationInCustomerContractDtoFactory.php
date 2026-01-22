<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInCustomerContractDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInCustomerContractDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationInCustomerContractDto::class;
    }
}
