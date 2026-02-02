<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DeliveryAddressInBranchDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DeliveryAddressInBranchDtoFactory extends Factory
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
            'country' => null,
            'county' => null,
        ];
    }

    protected function modelClass(): string
    {
        return DeliveryAddressInBranchDto::class;
    }
}
