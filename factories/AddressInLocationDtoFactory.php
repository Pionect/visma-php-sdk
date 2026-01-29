<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AddressInLocationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AddressInLocationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'addressId' => $this->faker->numberBetween(1, 1000),
            'addressLine1' => $this->faker->word(),
            'addressLine2' => $this->faker->word(),
            'addressLine3' => $this->faker->word(),
            'postalCode' => $this->faker->word(),
            'city' => $this->faker->word(),
            'country' => CountryInAddressDtoFactory::new()->make(),
            'county' => CountyInAddressDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return AddressInLocationDto::class;
    }
}
