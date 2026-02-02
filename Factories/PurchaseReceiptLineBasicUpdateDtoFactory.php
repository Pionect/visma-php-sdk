<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PurchaseReceiptLineBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseReceiptLineBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'lineType' => $this->faker->word(),
            'branchId' => $this->faker->uuid(),
            'branchNumber' => $this->faker->word(),
            'inventoryId' => $this->faker->uuid(),
            'warehouseId' => $this->faker->uuid(),
            'locationId' => $this->faker->uuid(),
            'transactionDescription' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
            'receiptQty' => null,
            'unitCost' => null,
            'extCost' => null,
            'discountPercent' => null,
            'discountAmount' => null,
            'manualDiscount' => $this->faker->boolean(),
            'discountCodeId' => $this->faker->uuid(),
            'amount' => null,
            'taxCategoryId' => $this->faker->uuid(),
            'accountId' => $this->faker->uuid(),
            'accountDescription' => $this->faker->sentence(),
            'subaccount' => [],
            'actualAccountId' => $this->faker->uuid(),
            'actualSubaccount' => [],
            'projectId' => $this->faker->uuid(),
            'projectTaskId' => $this->faker->uuid(),
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
            'customDec1' => null,
            'customDec2' => null,
            'customInt1' => $this->faker->numberBetween(1, 100),
            'customInt2' => $this->faker->numberBetween(1, 100),
            'customDateTimeUtc1' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseReceiptLineBasicUpdateDto::class;
    }
}
