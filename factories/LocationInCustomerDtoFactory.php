<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInCustomerDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInCustomerDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'countryId' => $this->faker->uuid(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationInCustomerDto::class;
    }
}
