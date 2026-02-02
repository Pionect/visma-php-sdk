<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\OrderTypeInSalesOrderBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class OrderTypeInSalesOrderBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return OrderTypeInSalesOrderBasicUpdateDto::class;
    }
}
