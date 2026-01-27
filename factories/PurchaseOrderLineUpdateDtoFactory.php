<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PurchaseOrderLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseOrderLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'branch' => $this->faker->word(),
            'inventory' => $this->faker->word(),
            'lineType' => $this->faker->word(),
            'warehouse' => $this->faker->word(),
            'lineDescription' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
            'orderQty' => $this->faker->randomFloat(2, 0, 1000),
            'unitCost' => $this->faker->randomFloat(2, 0, 1000),
            'extCost' => $this->faker->randomFloat(2, 0, 1000),
            'discountAmount' => $this->faker->randomFloat(2, 0, 1000),
            'discountPercent' => $this->faker->randomFloat(2, 0, 1000),
            'manualDiscount' => $this->faker->boolean(),
            'discountCode' => $this->faker->word(),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'alternateId' => $this->faker->uuid(),
            'minReceipt' => $this->faker->randomFloat(2, 0, 1000),
            'maxReceipt' => $this->faker->randomFloat(2, 0, 1000),
            'completeOn' => $this->faker->randomFloat(2, 0, 1000),
            'receiptAction' => $this->faker->word(),
            'taxCategory' => $this->faker->word(),
            'account' => $this->faker->word(),
            'sub' => [],
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'requested' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'promised' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'note' => $this->faker->word(),
            'customStr1' => $this->faker->word(),
            'customStr2' => $this->faker->word(),
            'customStr3' => $this->faker->word(),
            'customStr4' => $this->faker->word(),
            'customStr5' => $this->faker->word(),
            'customDec1' => $this->faker->word(),
            'customDec2' => $this->faker->word(),
            'customInt1' => $this->faker->word(),
            'customInt2' => $this->faker->word(),
            'customDateTimeUtc1' => $this->faker->word(),
            'completed' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseOrderLineUpdateDto::class;
    }
}
