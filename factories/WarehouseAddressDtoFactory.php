<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WarehouseAddressDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WarehouseAddressDtoFactory extends Factory
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
            'country' => CountryInWarehouseAddressDtoFactory::new()->make(),
            'county' => CountyInWarehouseAddressDtoFactory::new()->make(),
            'postalCode' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return WarehouseAddressDto::class;
    }
}
