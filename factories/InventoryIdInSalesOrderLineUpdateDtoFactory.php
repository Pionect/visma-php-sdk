<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryIdInSalesOrderLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryIdInSalesOrderLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryIdInSalesOrderLineUpdateDto::class;
    }
}
