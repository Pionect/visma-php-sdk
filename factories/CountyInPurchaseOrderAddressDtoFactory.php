<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CountyInPurchaseOrderAddressDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CountyInPurchaseOrderAddressDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return CountyInPurchaseOrderAddressDto::class;
    }
}
