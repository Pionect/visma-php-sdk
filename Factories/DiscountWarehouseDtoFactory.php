<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DiscountWarehouseDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DiscountWarehouseDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'warehouse' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DiscountWarehouseDto::class;
    }
}
