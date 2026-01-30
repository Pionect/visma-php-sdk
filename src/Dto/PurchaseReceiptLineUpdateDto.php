<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represents a Purchase Order Line in PurchaseReceiptContraoller. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseReceiptLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptLineUpdateDtoFactory testFactory()
 */
class PurchaseReceiptLineUpdateDto extends Model
{
    public function __construct(
        public ?array $allocations = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $note = null,
        public ?string $operation = null,
        public ?LineNbrInPurchaseReceiptLineUpdateDto $lineNbr = null,
        public ?LineTypeInPurchaseReceiptLineUpdateDto $lineType = null,
        public ?BranchIdInPurchaseReceiptLineUpdateDto $branchId = null,
        public ?BranchNumberInPurchaseReceiptLineUpdateDto $branchNumber = null,
        public ?InventoryIdInPurchaseReceiptLineUpdateDto $inventoryId = null,
        public ?WarehouseIdInPurchaseReceiptLineUpdateDto $warehouseId = null,
        public ?LocationIdInPurchaseReceiptLineUpdateDto $locationId = null,
        public ?TransactionDescriptionInPurchaseReceiptLineUpdateDto $transactionDescription = null,
        public ?UomInPurchaseReceiptLineUpdateDto $uom = null,
        public ?ReceiptQtyInPurchaseReceiptLineUpdateDto $receiptQty = null,
        public ?UnitCostInPurchaseReceiptLineUpdateDto $unitCost = null,
        public ?ExtCostInPurchaseReceiptLineUpdateDto $extCost = null,
        public ?DiscountPercentInPurchaseReceiptLineUpdateDto $discountPercent = null,
        public ?DiscountAmountInPurchaseReceiptLineUpdateDto $discountAmount = null,
        public ?ManualDiscountInPurchaseReceiptLineUpdateDto $manualDiscount = null,
        public ?DiscountCodeIdInPurchaseReceiptLineUpdateDto $discountCodeId = null,
        public ?AmountInPurchaseReceiptLineUpdateDto $amount = null,
        public ?TaxCategoryIdInPurchaseReceiptLineUpdateDto $taxCategoryId = null,
        public ?AccountIdInPurchaseReceiptLineUpdateDto $accountId = null,
        public ?AccountDescriptionInPurchaseReceiptLineUpdateDto $accountDescription = null,
        public ?array $subaccount = null,
        public ?ActualAccountIdInPurchaseReceiptLineUpdateDto $actualAccountId = null,
        public ?array $actualSubaccount = null,
        public ?ProjectIdInPurchaseReceiptLineUpdateDto $projectId = null,
        public ?ProjectTaskIdInPurchaseReceiptLineUpdateDto $projectTaskId = null,
        public ?ExpirationDateInPurchaseReceiptLineUpdateDto $expirationDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $lotSerialNumber = null,
        public ?PoOrderTypeInPurchaseReceiptLineUpdateDto $poOrderType = null,
        public ?PoOrderNbrInPurchaseReceiptLineUpdateDto $poOrderNbr = null,
        public ?PoOrderLineNbrInPurchaseReceiptLineUpdateDto $poOrderLineNbr = null,
        public ?TransferOrderTypeInPurchaseReceiptLineUpdateDto $transferOrderType = null,
        public ?TransferOrderNbrInPurchaseReceiptLineUpdateDto $transferOrderNbr = null,
        public ?TransferOrderLineNbrInPurchaseReceiptLineUpdateDto $transferOrderLineNbr = null,
        public ?CompletePoLineInPurchaseReceiptLineUpdateDto $completePoLine = null,
        public ?CustomStr1inPurchaseReceiptLineUpdateDto $customStr1 = null,
        public ?CustomStr2inPurchaseReceiptLineUpdateDto $customStr2 = null,
        public ?CustomStr3inPurchaseReceiptLineUpdateDto $customStr3 = null,
        public ?CustomStr4inPurchaseReceiptLineUpdateDto $customStr4 = null,
        public ?CustomStr5inPurchaseReceiptLineUpdateDto $customStr5 = null,
        public ?CustomDec1inPurchaseReceiptLineUpdateDto $customDec1 = null,
        public ?CustomDec2inPurchaseReceiptLineUpdateDto $customDec2 = null,
        public ?CustomInt1inPurchaseReceiptLineUpdateDto $customInt1 = null,
        public ?CustomInt2inPurchaseReceiptLineUpdateDto $customInt2 = null,
        #[MapName('customDateTimeUTC1')]
        public ?CustomDateTimeUtc1inPurchaseReceiptLineUpdateDto $customDateTimeUtc1 = null,
    ) {}
}
