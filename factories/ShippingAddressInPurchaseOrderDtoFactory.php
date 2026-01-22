<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ShippingAddressInPurchaseOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ShippingAddressInPurchaseOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'overrideAddress' => $this->faker->boolean(),
            'addressId' => $this->faker->numberBetween(1, 1000),
            'addressLine1' => $this->faker->word(),
            'addressLine2' => $this->faker->word(),
            'addressLine3' => $this->faker->word(),
            'postalCode' => $this->faker->word(),
            'city' => $this->faker->word(),
            'country' => $this->faker->word(),
            'county' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ShippingAddressInPurchaseOrderDto::class;
    }
}
