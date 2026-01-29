<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\InventoryTransferLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryTransferLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'toLocation' => LocationDescriptionDtoFactory::new()->make(),
            'lotSerialNumber' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'allocations' => [],
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'inventoryItem' => InventoryItemInInventoryTransferLineDtoFactory::new()->make(),
            'location' => LocationInInventoryTransferLineDtoFactory::new()->make(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'uom' => $this->faker->word(),
            'reasonCode' => ReasonCodeInInventoryTransferLineDtoFactory::new()->make(),
            'description' => $this->faker->sentence(),
            'attachments' => [],
            'branchNumber' => BranchNumberDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryTransferLineDto::class;
    }
}
