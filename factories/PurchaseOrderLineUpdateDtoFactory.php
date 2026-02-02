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
            'orderQty' => null,
            'unitCost' => null,
            'extCost' => null,
            'discountAmount' => null,
            'discountPercent' => null,
            'manualDiscount' => $this->faker->boolean(),
            'discountCode' => $this->faker->word(),
            'amount' => null,
            'alternateId' => $this->faker->uuid(),
            'minReceipt' => null,
            'maxReceipt' => null,
            'completeOn' => null,
            'receiptAction' => $this->faker->word(),
            'taxCategory' => $this->faker->word(),
            'account' => $this->faker->word(),
            'sub' => [],
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'requested' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'promised' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'note' => $this->faker->word(),
            'customStr1' => null,
            'customStr2' => null,
            'customStr3' => null,
            'customStr4' => null,
            'customStr5' => null,
            'customDec1' => null,
            'customDec2' => null,
            'customInt1' => null,
            'customInt2' => null,
            'customDateTimeUtc1' => null,
            'completed' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseOrderLineUpdateDto::class;
    }
}
