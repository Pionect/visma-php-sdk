<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\InventoryTransferLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\InventoryTransferLineDto>
 */
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
        return InventoryTransferLineDto::class;
    }
}
