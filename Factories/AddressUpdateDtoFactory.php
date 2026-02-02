<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AddressUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AddressUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'addressLine1' => $this->faker->word(),
            'addressLine2' => $this->faker->word(),
            'addressLine3' => $this->faker->word(),
            'postalCode' => $this->faker->word(),
            'city' => $this->faker->word(),
            'countryId' => $this->faker->uuid(),
            'county' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return AddressUpdateDto::class;
    }
}
