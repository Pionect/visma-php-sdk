<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CountyInSalesOrderAddressDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CountyInSalesOrderAddressDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return CountyInSalesOrderAddressDto::class;
    }
}
