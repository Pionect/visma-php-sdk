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
            'baseReceiptQty' => null,
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'branch' => null,
            'branchNumber' => $this->faker->word(),
            'inventory' => InventoryNumberDescriptionDtoFactory::new()->make(),
            'lineType' => $this->faker->word(),
            'warehouse' => null,
            'location' => null,
            'transactionDescription' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
            'orderQty' => null,
            'openQty' => null,
            'receiptQty' => null,
            'unitCost' => null,
            'extCost' => null,
            'discountPercent' => null,
            'discountAmount' => null,
            'manualDiscount' => $this->faker->boolean(),
            'discountCode' => null,
            'amount' => null,
            'taxCategory' => null,
            'account' => null,
            'accountDescription' => $this->faker->sentence(),
            'sub' => null,
            'actualAccount' => null,
            'actualSub' => null,
            'project' => null,
            'projectTask' => null,
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
        return PurchaseReceiptLineDto::class;
    }
}
