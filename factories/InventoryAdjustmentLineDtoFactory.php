<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryAdjustmentLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryAdjustmentLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'warehouse' => WarehouseInInventoryAdjustmentLineDtoFactory::new()->make(),
            'unitCost' => $this->faker->randomFloat(2, 0, 1000),
            'extCost' => $this->faker->randomFloat(2, 0, 1000),
            'receiptNumber' => $this->faker->word(),
            'poReceiptNumber' => $this->faker->word(),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'inventoryItem' => InventoryItemInInventoryAdjustmentLineDtoFactory::new()->make(),
            'location' => LocationInInventoryAdjustmentLineDtoFactory::new()->make(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'uom' => $this->faker->word(),
            'reasonCode' => ReasonCodeInInventoryAdjustmentLineDtoFactory::new()->make(),
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
