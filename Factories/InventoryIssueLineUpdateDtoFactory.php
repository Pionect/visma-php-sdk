<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\InventoryIssueLineUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Enums\InventoryIssueLineTransactionTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryIssueLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'warehouseId' => $this->faker->uuid(),
            'unitCost' => null,
            'extCost' => null,
            'unitPrice' => null,
            'extPrice' => null,
            'tranType' => $this->faker->randomElement(InventoryIssueLineTransactionTypeEnum::cases()),
            'lotSerialNumber' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'allocations' => [],
            'costCode' => $this->faker->word(),
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'inventoryNumber' => $this->faker->word(),
            'locationId' => $this->faker->uuid(),
            'quantity' => null,
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
        return InventoryIssueLineUpdateDto::class;
    }
}
