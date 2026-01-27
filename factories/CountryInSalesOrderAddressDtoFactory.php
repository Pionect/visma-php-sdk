<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CountryInSalesOrderAddressDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CountryInSalesOrderAddressDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CountryInSalesOrderAddressDto::class;
    }
}
