<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\InventoryIssueLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryIssueLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'transactionType' => $this->faker->word(),
            'warehouse' => $this->faker->word(),
            'unitCost' => $this->faker->randomFloat(2, 0, 1000),
            'extCost' => $this->faker->randomFloat(2, 0, 1000),
            'unitPrice' => $this->faker->randomFloat(2, 0, 1000),
            'extPrice' => $this->faker->randomFloat(2, 0, 1000),
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'lotSerialNumber' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'allocations' => [],
            'poReceiptNumber' => $this->faker->word(),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'inventoryItem' => $this->faker->word(),
            'location' => $this->faker->word(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'uom' => $this->faker->word(),
            'reasonCode' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'attachments' => [],
            'branchNumber' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryIssueLineDto::class;
    }
}
