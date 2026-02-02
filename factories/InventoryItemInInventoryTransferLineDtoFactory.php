<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryItemInInventoryTransferLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryItemInInventoryTransferLineDtoFactory extends Factory
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
        return InventoryItemInInventoryTransferLineDto::class;
    }
}
