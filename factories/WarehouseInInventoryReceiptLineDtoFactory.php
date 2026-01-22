<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WarehouseInInventoryReceiptLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WarehouseInInventoryReceiptLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return WarehouseInInventoryReceiptLineDto::class;
    }
}
