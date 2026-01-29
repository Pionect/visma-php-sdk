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
            'branch' => BranchInPurchaseReceiptLineDtoFactory::new()->make(),
            'branchNumber' => BranchNumberInPurchaseReceiptLineDtoFactory::new()->make(),
            'inventory' => InventoryNumberDescriptionDtoFactory::new()->make(),
            'lineType' => $this->faker->word(),
            'warehouse' => WarehouseInPurchaseReceiptLineDtoFactory::new()->make(),
            'location' => LocationInPurchaseReceiptLineDtoFactory::new()->make(),
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
            'discountCode' => DiscountCodeInPurchaseReceiptLineDtoFactory::new()->make(),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'taxCategory' => TaxCategoryInPurchaseReceiptLineDtoFactory::new()->make(),
            'account' => AccountInPurchaseReceiptLineDtoFactory::new()->make(),
            'accountDescription' => $this->faker->sentence(),
            'sub' => SubInPurchaseReceiptLineDtoFactory::new()->make(),
            'actualAccount' => ActualAccountInPurchaseReceiptLineDtoFactory::new()->make(),
            'actualSub' => ActualSubInPurchaseReceiptLineDtoFactory::new()->make(),
            'project' => ProjectInPurchaseReceiptLineDtoFactory::new()->make(),
            'projectTask' => ProjectTaskInPurchaseReceiptLineDtoFactory::new()->make(),
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
