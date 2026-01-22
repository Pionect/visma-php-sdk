<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PurchaseReceiptLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseReceiptLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'allocations' => [],
            'note' => $this->faker->word(),
            'baseReceiptQty' => $this->faker->randomFloat(2, 0, 1000),
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'branch' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
            'inventory' => $this->faker->word(),
            'lineType' => $this->faker->word(),
            'warehouse' => $this->faker->word(),
            'location' => $this->faker->word(),
            'transactionDescription' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
            'orderQty' => $this->faker->randomFloat(2, 0, 1000),
            'openQty' => $this->faker->randomFloat(2, 0, 1000),
            'receiptQty' => $this->faker->randomFloat(2, 0, 1000),
            'unitCost' => $this->faker->randomFloat(2, 0, 1000),
            'extCost' => $this->faker->randomFloat(2, 0, 1000),
            'discountPercent' => $this->faker->randomFloat(2, 0, 1000),
            'discountAmount' => $this->faker->randomFloat(2, 0, 1000),
            'manualDiscount' => $this->faker->boolean(),
            'discountCode' => $this->faker->word(),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'taxCategory' => $this->faker->word(),
            'account' => $this->faker->word(),
            'accountDescription' => $this->faker->sentence(),
            'sub' => $this->faker->word(),
            'actualAccount' => $this->faker->word(),
            'actualSub' => $this->faker->word(),
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lotSerialNumber' => $this->faker->word(),
            'poOrderType' => $this->faker->word(),
            'poOrderNbr' => $this->faker->word(),
            'poOrderLineNbr' => $this->faker->numberBetween(1, 100),
            'transferOrderType' => $this->faker->word(),
            'transferOrderNbr' => $this->faker->word(),
            'transferOrderLineNbr' => $this->faker->numberBetween(1, 100),
            'completePoLine' => $this->faker->boolean(),
            'customStr1' => $this->faker->word(),
            'customStr2' => $this->faker->word(),
            'customStr3' => $this->faker->word(),
            'customStr4' => $this->faker->word(),
            'customStr5' => $this->faker->word(),
            'customDec1' => $this->faker->randomFloat(2, 0, 1000),
            'customDec2' => $this->faker->randomFloat(2, 0, 1000),
            'customInt1' => $this->faker->numberBetween(1, 100),
            'customInt2' => $this->faker->numberBetween(1, 100),
            'customDateTimeUtc1' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseReceiptLineDto::class;
    }
}
