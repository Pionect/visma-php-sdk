<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerDocumentAddressDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerDocumentAddressDtoFactory extends Factory
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
            'country' => $this->faker->word(),
            'county' => $this->faker->word(),
            'overrideAddress' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerDocumentAddressDto::class;
    }
}
