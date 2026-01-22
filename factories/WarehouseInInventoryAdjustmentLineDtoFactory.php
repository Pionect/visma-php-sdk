<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WarehouseInInventoryAdjustmentLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WarehouseInInventoryAdjustmentLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return WarehouseInInventoryAdjustmentLineDto::class;
    }
}
