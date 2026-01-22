<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\OwnerInSalesOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class OwnerInSalesOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'employeeId' => $this->faker->uuid(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return OwnerInSalesOrderDto::class;
    }
}
