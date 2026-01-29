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
            'warehouse' => WarehouseInInventoryIssueLineDtoFactory::new()->make(),
            'unitCost' => $this->faker->randomFloat(2, 0, 1000),
            'extCost' => $this->faker->randomFloat(2, 0, 1000),
            'unitPrice' => $this->faker->randomFloat(2, 0, 1000),
            'extPrice' => $this->faker->randomFloat(2, 0, 1000),
            'project' => ProjectInInventoryIssueLineDtoFactory::new()->make(),
            'projectTask' => ProjectTaskInInventoryIssueLineDtoFactory::new()->make(),
            'lotSerialNumber' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'allocations' => [],
            'poReceiptNumber' => $this->faker->word(),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'inventoryItem' => InventoryItemInInventoryIssueLineDtoFactory::new()->make(),
            'location' => LocationInInventoryIssueLineDtoFactory::new()->make(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'uom' => $this->faker->word(),
            'reasonCode' => ReasonCodeInInventoryIssueLineDtoFactory::new()->make(),
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
