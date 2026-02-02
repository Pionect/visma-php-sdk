<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\InventoryReceiptDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryReceiptDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'totalCost' => null,
            'controlCost' => null,
            'transferNumber' => $this->faker->word(),
            'receiptLines' => [],
            'referenceNumber' => $this->faker->word(),
            'status' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'postPeriod' => $this->faker->word(),
            'externalReference' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'totalQuantity' => null,
            'controlQuantity' => null,
            'batchNumber' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'branchNumber' => $this->faker->word(),
            'attachments' => [],
            'timestamp' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryReceiptDto::class;
    }
}
