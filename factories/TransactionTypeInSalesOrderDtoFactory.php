<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TransactionTypeInSalesOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TransactionTypeInSalesOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return TransactionTypeInSalesOrderDto::class;
    }
}
