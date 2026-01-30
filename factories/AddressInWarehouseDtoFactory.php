<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AddressInWarehouseDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AddressInWarehouseDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'addressId' => $this->faker->numberBetween(1, 1000),
            'addressType' => $this->faker->word(),
            'validated' => $this->faker->boolean(),
            'addressLine1' => $this->faker->word(),
            'addressLine2' => $this->faker->word(),
            'city' => $this->faker->word(),
            'country' => null,
            'county' => null,
            'postalCode' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return AddressInWarehouseDto::class;
    }
}
