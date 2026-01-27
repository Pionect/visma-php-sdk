<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryReceiptLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryReceiptLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'warehouseId' => $this->faker->uuid(),
            'unitCost' => $this->faker->randomFloat(2, 0, 1000),
            'extCost' => $this->faker->randomFloat(2, 0, 1000),
            'allocations' => [],
            'operation' => $this->faker->word(),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'inventoryNumber' => $this->faker->word(),
            'locationId' => $this->faker->uuid(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'uom' => $this->faker->word(),
            'reasonCode' => $this->faker->word(),
            'projectId' => $this->faker->uuid(),
            'projectTaskId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'branchNumber' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryReceiptLineUpdateDto::class;
    }
}
