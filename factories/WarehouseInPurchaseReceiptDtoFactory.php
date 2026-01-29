<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WarehouseInPurchaseReceiptDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WarehouseInPurchaseReceiptDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return WarehouseInPurchaseReceiptDto::class;
    }
}
