<?php

namespace Pionect\VismaSdk\Factories;

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
            'lineNbr' => null,
            'lineType' => null,
            'branchId' => null,
            'branchNumber' => $this->faker->word(),
            'inventoryId' => null,
            'warehouseId' => null,
            'locationId' => null,
            'transactionDescription' => $this->faker->sentence(),
            'uom' => null,
            'receiptQty' => null,
            'unitCost' => null,
            'extCost' => null,
            'discountPercent' => null,
            'discountAmount' => null,
            'manualDiscount' => null,
            'discountCodeId' => null,
            'amount' => null,
            'taxCategoryId' => null,
            'accountId' => null,
            'accountDescription' => $this->faker->sentence(),
            'subaccount' => [],
            'actualAccountId' => null,
            'actualSubaccount' => [],
            'projectId' => null,
            'projectTaskId' => null,
            'expirationDate' => null,
            'lotSerialNumber' => $this->faker->word(),
            'poOrderType' => null,
            'poOrderNbr' => null,
            'poOrderLineNbr' => null,
            'transferOrderType' => null,
            'transferOrderNbr' => null,
            'transferOrderLineNbr' => null,
            'completePoLine' => null,
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
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseReceiptLineUpdateDto::class;
    }
}
