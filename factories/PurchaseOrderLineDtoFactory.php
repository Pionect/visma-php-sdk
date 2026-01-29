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
            'branch' => BranchInPurchaseOrderLineDtoFactory::new()->make(),
            'inventory' => InventoryInPurchaseOrderLineDtoFactory::new()->make(),
            'lineType' => $this->faker->word(),
            'warehouse' => WarehouseInPurchaseOrderLineDtoFactory::new()->make(),
            'lineDescription' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
            'orderQty' => $this->faker->randomFloat(2, 0, 1000),
            'baseOrderQty' => $this->faker->randomFloat(2, 0, 1000),
            'qtyOnReceipts' => $this->faker->randomFloat(2, 0, 1000),
            'unitCost' => $this->faker->randomFloat(2, 0, 1000),
            'unitCostInBaseCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'extCost' => $this->faker->randomFloat(2, 0, 1000),
            'discountPercent' => $this->faker->randomFloat(2, 0, 1000),
            'discountAmount' => $this->faker->randomFloat(2, 0, 1000),
            'manualDiscount' => $this->faker->boolean(),
            'discountCode' => DiscountCodeInPurchaseOrderLineDtoFactory::new()->make(),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'receivedAmt' => $this->faker->randomFloat(2, 0, 1000),
            'alternateId' => $this->faker->uuid(),
            'minReceipt' => $this->faker->randomFloat(2, 0, 1000),
            'maxReceipt' => $this->faker->randomFloat(2, 0, 1000),
            'completeOn' => $this->faker->randomFloat(2, 0, 1000),
            'receiptAction' => $this->faker->word(),
            'taxCategory' => TaxCategoryInPurchaseOrderLineDtoFactory::new()->make(),
            'account' => AccountInPurchaseOrderLineDtoFactory::new()->make(),
            'sub' => SubInPurchaseOrderLineDtoFactory::new()->make(),
            'project' => ProjectInPurchaseOrderLineDtoFactory::new()->make(),
            'projectTask' => ProjectTaskInPurchaseOrderLineDtoFactory::new()->make(),
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
            'customDec1' => $this->faker->randomFloat(2, 0, 1000),
            'customDec2' => $this->faker->randomFloat(2, 0, 1000),
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
