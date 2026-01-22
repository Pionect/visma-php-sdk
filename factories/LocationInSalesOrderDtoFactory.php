<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInSalesOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInSalesOrderDtoFactory extends Factory
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
        return LocationInSalesOrderDto::class;
    }
}
