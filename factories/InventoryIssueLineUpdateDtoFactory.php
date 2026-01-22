<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\InventoryIssueLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryIssueLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'warehouseId' => $this->faker->word(),
            'unitCost' => $this->faker->word(),
            'extCost' => $this->faker->word(),
            'unitPrice' => $this->faker->word(),
            'extPrice' => $this->faker->word(),
            'tranType' => $this->faker->word(),
            'lotSerialNumber' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'allocations' => [],
            'costCode' => $this->faker->word(),
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
        return InventoryIssueLineUpdateDto::class;
    }
}
