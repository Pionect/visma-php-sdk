<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WarehouseInPurchaseOrderLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WarehouseInPurchaseOrderLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return WarehouseInPurchaseOrderLineDto::class;
    }
}
