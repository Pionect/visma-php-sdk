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
            'warehouse' => null,
            'unitCost' => null,
            'extCost' => null,
            'unitPrice' => null,
            'extPrice' => null,
            'project' => null,
            'projectTask' => null,
            'lotSerialNumber' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
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
        return InventoryIssueLineDto::class;
    }
}
