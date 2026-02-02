<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CountryInPurchaseOrderAddressDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CountryInPurchaseOrderAddressDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'name' => $this->faker->name(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CountryInPurchaseOrderAddressDto::class;
    }
}
