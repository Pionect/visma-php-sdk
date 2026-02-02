<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryAdjustmentLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryAdjustmentLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'warehouse' => null,
            'unitCost' => null,
            'extCost' => null,
            'receiptNumber' => $this->faker->word(),
            'poReceiptNumber' => $this->faker->word(),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'inventoryItem' => null,
            'location' => null,
            'quantity' => null,
            'uom' => $this->faker->word(),
            'reasonCode' => null,
            'description' => $this->faker->sentence(),
            'attachments' => [],
            'branchNumber' => BranchNumberDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryAdjustmentLineDto::class;
    }
}
