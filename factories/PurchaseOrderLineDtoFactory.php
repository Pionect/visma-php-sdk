<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PurchaseOrderLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseOrderLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'branch' => null,
            'inventory' => null,
            'lineType' => $this->faker->word(),
            'warehouse' => null,
            'lineDescription' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
            'orderQty' => null,
            'baseOrderQty' => null,
            'qtyOnReceipts' => null,
            'unitCost' => null,
            'unitCostInBaseCurrency' => null,
            'extCost' => null,
            'discountPercent' => null,
            'discountAmount' => null,
            'manualDiscount' => $this->faker->boolean(),
            'discountCode' => null,
            'amount' => null,
            'receivedAmt' => null,
            'alternateId' => $this->faker->uuid(),
            'minReceipt' => null,
            'maxReceipt' => null,
            'completeOn' => null,
            'receiptAction' => $this->faker->word(),
            'taxCategory' => null,
            'account' => null,
            'sub' => null,
            'project' => null,
            'projectTask' => null,
            'requested' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'promised' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'completed' => $this->faker->boolean(),
            'canceled' => $this->faker->boolean(),
            'orderType' => $this->faker->word(),
            'orderNumber' => $this->faker->word(),
            'note' => $this->faker->word(),
            'customStr1' => $this->faker->word(),
            'customStr2' => $this->faker->word(),
            'customStr3' => $this->faker->word(),
            'customStr4' => $this->faker->word(),
            'customStr5' => $this->faker->word(),
            'customDec1' => null,
            'customDec2' => null,
            'customInt1' => $this->faker->numberBetween(1, 100),
            'customInt2' => $this->faker->numberBetween(1, 100),
            'customDateTimeUtc1' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseOrderLineDto::class;
    }
}
