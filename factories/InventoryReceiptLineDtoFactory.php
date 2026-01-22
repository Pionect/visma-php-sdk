<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryReceiptLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryReceiptLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'warehouse' => $this->faker->word(),
            'unitCost' => $this->faker->randomFloat(2, 0, 1000),
            'extCost' => $this->faker->randomFloat(2, 0, 1000),
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'allocations' => [],
            'poReceiptNumber' => $this->faker->word(),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'inventoryItem' => $this->faker->word(),
            'location' => $this->faker->word(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'uom' => $this->faker->word(),
            'reasonCode' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'attachments' => [],
            'branchNumber' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryReceiptLineDto::class;
    }
}
