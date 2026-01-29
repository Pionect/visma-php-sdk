<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PurchaseOrderAddressDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseOrderAddressDtoFactory extends Factory
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
            'country' => CountryInPurchaseOrderAddressDtoFactory::new()->make(),
            'county' => CountyInPurchaseOrderAddressDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseOrderAddressDto::class;
    }
}
