<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SubaccountInSalesOrderLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SubaccountInSalesOrderLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'active' => $this->faker->boolean(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return SubaccountInSalesOrderLineDto::class;
    }
}
