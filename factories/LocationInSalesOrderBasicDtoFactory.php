<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInSalesOrderBasicDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInSalesOrderBasicDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'countryId' => $this->faker->uuid(),
            'id' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationInSalesOrderBasicDto::class;
    }
}
