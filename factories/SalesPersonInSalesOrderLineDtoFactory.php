<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesPersonInSalesOrderLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesPersonInSalesOrderLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesPersonInSalesOrderLineDto::class;
    }
}
