<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryReceiptLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryReceiptLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'warehouseId' => $this->faker->word(),
            'unitCost' => $this->faker->word(),
            'extCost' => $this->faker->word(),
            'allocations' => [],
            'operation' => $this->faker->word(),
            'lineNumber' => $this->faker->word(),
            'inventoryNumber' => $this->faker->word(),
            'locationId' => $this->faker->word(),
            'quantity' => $this->faker->word(),
            'uom' => $this->faker->word(),
            'reasonCode' => $this->faker->word(),
            'projectId' => $this->faker->word(),
            'projectTaskId' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'branchNumber' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryReceiptLineUpdateDto::class;
    }
}
