<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryReceiptLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\InventoryReceiptLineDto>
 */
class InventoryReceiptLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'warehouse' => null,
            'unitCost' => null,
            'extCost' => null,
            'project' => null,
            'projectTask' => null,
            'allocations' => [],
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
        return InventoryReceiptLineDto::class;
    }
}
