<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PreferredWarehouseInSalesOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PreferredWarehouseInSalesOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return PreferredWarehouseInSalesOrderDto::class;
    }
}
