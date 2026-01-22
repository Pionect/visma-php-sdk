<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CountryInWarehouseAddressDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CountryInWarehouseAddressDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'errorInfo' => $this->faker->word(),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CountryInWarehouseAddressDto::class;
    }
}
