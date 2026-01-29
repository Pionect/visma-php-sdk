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
            'lineNbr' => LineNbrInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'lineType' => LineTypeInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'branchId' => BranchIdInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'branchNumber' => BranchNumberInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'inventoryId' => InventoryIdInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'warehouseId' => WarehouseIdInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'locationId' => LocationIdInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'transactionDescription' => TransactionDescriptionInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'uom' => UomInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'receiptQty' => ReceiptQtyInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'unitCost' => UnitCostInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'extCost' => ExtCostInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'discountPercent' => DiscountPercentInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'discountAmount' => DiscountAmountInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'manualDiscount' => ManualDiscountInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'discountCodeId' => DiscountCodeIdInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'amount' => AmountInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'taxCategoryId' => TaxCategoryIdInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'accountId' => AccountIdInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'accountDescription' => AccountDescriptionInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'subaccount' => [],
            'actualAccountId' => ActualAccountIdInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'actualSubaccount' => [],
            'projectId' => ProjectIdInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'projectTaskId' => ProjectTaskIdInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lotSerialNumber' => $this->faker->word(),
            'poOrderType' => PoOrderTypeInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'poOrderNbr' => PoOrderNbrInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'poOrderLineNbr' => PoOrderLineNbrInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'transferOrderType' => TransferOrderTypeInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'transferOrderNbr' => TransferOrderNbrInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'transferOrderLineNbr' => TransferOrderLineNbrInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'completePoLine' => CompletePoLineInPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'customStr1' => CustomStr1InPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'customStr2' => CustomStr2InPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'customStr3' => CustomStr3InPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'customStr4' => CustomStr4InPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'customStr5' => CustomStr5InPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'customDec1' => CustomDec1InPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'customDec2' => CustomDec2InPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'customInt1' => CustomInt1InPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'customInt2' => CustomInt2InPurchaseReceiptLineUpdateDtoFactory::new()->make(),
            'customDateTimeUtc1' => CustomDateTimeUTC1InPurchaseReceiptLineUpdateDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseReceiptLineUpdateDto::class;
    }
}
