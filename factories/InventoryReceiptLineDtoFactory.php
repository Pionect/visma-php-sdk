<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryReceiptLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryReceiptLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'warehouse' => WarehouseInInventoryReceiptLineDtoFactory::new()->make(),
            'unitCost' => $this->faker->randomFloat(2, 0, 1000),
            'extCost' => $this->faker->randomFloat(2, 0, 1000),
            'project' => ProjectInInventoryReceiptLineDtoFactory::new()->make(),
            'projectTask' => ProjectTaskInInventoryReceiptLineDtoFactory::new()->make(),
            'allocations' => [],
            'poReceiptNumber' => $this->faker->word(),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'inventoryItem' => InventoryItemInInventoryReceiptLineDtoFactory::new()->make(),
            'location' => LocationInInventoryReceiptLineDtoFactory::new()->make(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'uom' => $this->faker->word(),
            'reasonCode' => ReasonCodeInInventoryReceiptLineDtoFactory::new()->make(),
            'description' => $this->faker->sentence(),
            'attachments' => [],
            'branchNumber' => BranchNumberDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryReceiptLineDto::class;
    }
}
