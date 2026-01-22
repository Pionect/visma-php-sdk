<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryItemInInventoryReceiptLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryItemInInventoryReceiptLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryItemInInventoryReceiptLineDto::class;
    }
}
