<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\InventoryTransferLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryTransferLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'toLocationId' => $this->faker->uuid(),
            'lotSerialNumber' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
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
        return InventoryTransferLineUpdateDto::class;
    }
}
