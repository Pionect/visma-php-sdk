<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CountyInSalesOrderAddressDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CountyInSalesOrderAddressDtoFactory extends Factory
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
        return CountyInSalesOrderAddressDto::class;
    }
}
