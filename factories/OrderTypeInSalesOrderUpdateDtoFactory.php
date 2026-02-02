<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\OrderTypeInSalesOrderUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class OrderTypeInSalesOrderUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return OrderTypeInSalesOrderUpdateDto::class;
    }
}
