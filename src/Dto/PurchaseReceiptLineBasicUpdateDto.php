<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represents a Purchase Receipt Line in PurchaseReceiptBasicContraoller. Used for adding
 * data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseReceiptLineBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptLineBasicUpdateDtoFactory testFactory()
 */
class PurchaseReceiptLineBasicUpdateDto extends Model
{
    public function __construct(
        public ?string $operation = null,
        public ?LineNbrInPurchaseReceiptLineBasicUpdateDto $lineNbr = null,
        public ?LineTypeInPurchaseReceiptLineBasicUpdateDto $lineType = null,
        public ?BranchIdInPurchaseReceiptLineBasicUpdateDto $branchId = null,
        public ?BranchNumberInPurchaseReceiptLineBasicUpdateDto $branchNumber = null,
        public ?InventoryIdInPurchaseReceiptLineBasicUpdateDto $inventoryId = null,
        public ?WarehouseIdInPurchaseReceiptLineBasicUpdateDto $warehouseId = null,
        public ?LocationIdInPurchaseReceiptLineBasicUpdateDto $locationId = null,
        public ?TransactionDescriptionInPurchaseReceiptLineBasicUpdateDto $transactionDescription = null,
        public ?UomInPurchaseReceiptLineBasicUpdateDto $uom = null,
        public ?ReceiptQtyInPurchaseReceiptLineBasicUpdateDto $receiptQty = null,
        public ?UnitCostInPurchaseReceiptLineBasicUpdateDto $unitCost = null,
        public ?ExtCostInPurchaseReceiptLineBasicUpdateDto $extCost = null,
        public ?DiscountPercentInPurchaseReceiptLineBasicUpdateDto $discountPercent = null,
        public ?DiscountAmountInPurchaseReceiptLineBasicUpdateDto $discountAmount = null,
        public ?ManualDiscountInPurchaseReceiptLineBasicUpdateDto $manualDiscount = null,
        public ?DiscountCodeIdInPurchaseReceiptLineBasicUpdateDto $discountCodeId = null,
        public ?AmountInPurchaseReceiptLineBasicUpdateDto $amount = null,
        public ?TaxCategoryIdInPurchaseReceiptLineBasicUpdateDto $taxCategoryId = null,
        public ?AccountIdInPurchaseReceiptLineBasicUpdateDto $accountId = null,
        public ?AccountDescriptionInPurchaseReceiptLineBasicUpdateDto $accountDescription = null,
        public ?array $subaccount = null,
        public ?ActualAccountIdInPurchaseReceiptLineBasicUpdateDto $actualAccountId = null,
        public ?array $actualSubaccount = null,
        public ?ProjectIdInPurchaseReceiptLineBasicUpdateDto $projectId = null,
        public ?ProjectTaskIdInPurchaseReceiptLineBasicUpdateDto $projectTaskId = null,
        public ?ExpirationDateInPurchaseReceiptLineBasicUpdateDto $expirationDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $lotSerialNumber = null,
        public ?PoOrderTypeInPurchaseReceiptLineBasicUpdateDto $poOrderType = null,
        public ?PoOrderNbrInPurchaseReceiptLineBasicUpdateDto $poOrderNbr = null,
        public ?PoOrderLineNbrInPurchaseReceiptLineBasicUpdateDto $poOrderLineNbr = null,
        public ?TransferOrderTypeInPurchaseReceiptLineBasicUpdateDto $transferOrderType = null,
        public ?TransferOrderNbrInPurchaseReceiptLineBasicUpdateDto $transferOrderNbr = null,
        public ?TransferOrderLineNbrInPurchaseReceiptLineBasicUpdateDto $transferOrderLineNbr = null,
        public ?CompletePoLineInPurchaseReceiptLineBasicUpdateDto $completePoLine = null,
        public ?CustomStr1inPurchaseReceiptLineBasicUpdateDto $customStr1 = null,
        public ?CustomStr2inPurchaseReceiptLineBasicUpdateDto $customStr2 = null,
        public ?CustomStr3inPurchaseReceiptLineBasicUpdateDto $customStr3 = null,
        public ?CustomStr4inPurchaseReceiptLineBasicUpdateDto $customStr4 = null,
        public ?CustomStr5inPurchaseReceiptLineBasicUpdateDto $customStr5 = null,
        public ?CustomDec1inPurchaseReceiptLineBasicUpdateDto $customDec1 = null,
        public ?CustomDec2inPurchaseReceiptLineBasicUpdateDto $customDec2 = null,
        public ?CustomInt1inPurchaseReceiptLineBasicUpdateDto $customInt1 = null,
        public ?CustomInt2inPurchaseReceiptLineBasicUpdateDto $customInt2 = null,
        #[MapName('customDateTimeUTC1')]
        public ?CustomDateTimeUtc1inPurchaseReceiptLineBasicUpdateDto $customDateTimeUtc1 = null,
    ) {}
}
