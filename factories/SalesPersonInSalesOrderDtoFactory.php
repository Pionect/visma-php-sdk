<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesPersonInSalesOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesPersonInSalesOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesPersonInSalesOrderDto::class;
    }
}
