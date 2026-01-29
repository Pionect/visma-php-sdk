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
            'lineNbr' => LineNbrInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'lineType' => LineTypeInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'branchId' => BranchIdInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'branchNumber' => BranchNumberInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'inventoryId' => InventoryIdInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'warehouseId' => WarehouseIdInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'locationId' => LocationIdInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'transactionDescription' => TransactionDescriptionInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'uom' => UomInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'receiptQty' => ReceiptQtyInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'unitCost' => UnitCostInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'extCost' => ExtCostInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'discountPercent' => DiscountPercentInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'discountAmount' => DiscountAmountInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'manualDiscount' => ManualDiscountInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'discountCodeId' => DiscountCodeIdInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'amount' => AmountInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'taxCategoryId' => TaxCategoryIdInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'accountId' => AccountIdInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'accountDescription' => AccountDescriptionInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'subaccount' => [],
            'actualAccountId' => ActualAccountIdInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'actualSubaccount' => [],
            'projectId' => ProjectIdInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'projectTaskId' => ProjectTaskIdInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lotSerialNumber' => $this->faker->word(),
            'poOrderType' => PoOrderTypeInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'poOrderNbr' => PoOrderNbrInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'poOrderLineNbr' => PoOrderLineNbrInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'transferOrderType' => TransferOrderTypeInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'transferOrderNbr' => TransferOrderNbrInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'transferOrderLineNbr' => TransferOrderLineNbrInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'completePoLine' => CompletePoLineInPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'customStr1' => CustomStr1InPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'customStr2' => CustomStr2InPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'customStr3' => CustomStr3InPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'customStr4' => CustomStr4InPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'customStr5' => CustomStr5InPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'customDec1' => CustomDec1InPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'customDec2' => CustomDec2InPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'customInt1' => CustomInt1InPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'customInt2' => CustomInt2InPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
            'customDateTimeUtc1' => CustomDateTimeUTC1InPurchaseReceiptLineBasicUpdateDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseReceiptLineBasicUpdateDto::class;
    }
}
