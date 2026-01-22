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
            'toLocationId' => $this->faker->word(),
            'lotSerialNumber' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
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
        return InventoryTransferLineUpdateDto::class;
    }
}
