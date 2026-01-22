<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PurchaseReceiptLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseReceiptLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'allocations' => [],
            'note' => $this->faker->word(),
            'operation' => $this->faker->word(),
            'lineNbr' => $this->faker->word(),
            'lineType' => $this->faker->word(),
            'branchId' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
            'inventoryId' => $this->faker->word(),
            'warehouseId' => $this->faker->word(),
            'locationId' => $this->faker->word(),
            'transactionDescription' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
            'receiptQty' => $this->faker->word(),
            'unitCost' => $this->faker->word(),
            'extCost' => $this->faker->word(),
            'discountPercent' => $this->faker->word(),
            'discountAmount' => $this->faker->word(),
            'manualDiscount' => $this->faker->word(),
            'discountCodeId' => $this->faker->word(),
            'amount' => $this->faker->word(),
            'taxCategoryId' => $this->faker->word(),
            'accountId' => $this->faker->word(),
            'accountDescription' => $this->faker->sentence(),
            'subaccount' => [],
            'actualAccountId' => $this->faker->word(),
            'actualSubaccount' => [],
            'projectId' => $this->faker->word(),
            'projectTaskId' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lotSerialNumber' => $this->faker->word(),
            'poOrderType' => $this->faker->word(),
            'poOrderNbr' => $this->faker->word(),
            'poOrderLineNbr' => $this->faker->word(),
            'transferOrderType' => $this->faker->word(),
            'transferOrderNbr' => $this->faker->word(),
            'transferOrderLineNbr' => $this->faker->word(),
            'completePoLine' => $this->faker->word(),
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
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseReceiptLineUpdateDto::class;
    }
}
