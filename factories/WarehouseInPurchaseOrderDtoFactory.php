<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WarehouseInPurchaseOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WarehouseInPurchaseOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return WarehouseInPurchaseOrderDto::class;
    }
}
