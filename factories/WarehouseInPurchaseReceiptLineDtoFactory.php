<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WarehouseInPurchaseReceiptLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WarehouseInPurchaseReceiptLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return WarehouseInPurchaseReceiptLineDto::class;
    }
}
