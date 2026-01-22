<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Purchase Receipt Line in PurchaseReceiptBasicContraoller. Used for adding
 * data.
 */
class PurchaseReceiptLineBasicUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\lineNbrInPurchaseReceiptLineBasicUpdateDto $lineNbr;

    #[Property]
    public ?\lineTypeInPurchaseReceiptLineBasicUpdateDto $lineType;

    #[Property]
    public ?\branchIdInPurchaseReceiptLineBasicUpdateDto $branchId;

    #[Property]
    public ?\branchNumberInPurchaseReceiptLineBasicUpdateDto $branchNumber;

    #[Property]
    public ?\inventoryIdInPurchaseReceiptLineBasicUpdateDto $inventoryId;

    #[Property]
    public ?\warehouseIdInPurchaseReceiptLineBasicUpdateDto $warehouseId;

    #[Property]
    public ?\locationIdInPurchaseReceiptLineBasicUpdateDto $locationId;

    #[Property]
    public ?\transactionDescriptionInPurchaseReceiptLineBasicUpdateDto $transactionDescription;

    #[Property]
    public ?\uomInPurchaseReceiptLineBasicUpdateDto $uom;

    #[Property]
    public ?\receiptQtyInPurchaseReceiptLineBasicUpdateDto $receiptQty;

    #[Property]
    public ?\unitCostInPurchaseReceiptLineBasicUpdateDto $unitCost;

    #[Property]
    public ?\extCostInPurchaseReceiptLineBasicUpdateDto $extCost;

    #[Property]
    public ?\discountPercentInPurchaseReceiptLineBasicUpdateDto $discountPercent;

    #[Property]
    public ?\discountAmountInPurchaseReceiptLineBasicUpdateDto $discountAmount;

    #[Property]
    public ?\manualDiscountInPurchaseReceiptLineBasicUpdateDto $manualDiscount;

    #[Property]
    public ?\discountCodeIdInPurchaseReceiptLineBasicUpdateDto $discountCodeId;

    #[Property]
    public ?\amountInPurchaseReceiptLineBasicUpdateDto $amount;

    #[Property]
    public ?\taxCategoryIdInPurchaseReceiptLineBasicUpdateDto $taxCategoryId;

    #[Property]
    public ?\accountIdInPurchaseReceiptLineBasicUpdateDto $accountId;

    #[Property]
    public ?\accountDescriptionInPurchaseReceiptLineBasicUpdateDto $accountDescription;

    /** The Document details tab &gt; The subaccount to be used to record the non-stock item amount on the purchase receipt (for non-stock items for which receipts are not required). */
    #[Property]
    public ?array $subaccount;

    #[Property]
    public ?\actualAccountIdInPurchaseReceiptLineBasicUpdateDto $actualAccountId;

    /** The Document details tab &gt; The subaccount used to record the item amount on the purchase receipt, used for stock items and non-stock items for which a receipt is required. */
    #[Property]
    public ?array $actualSubaccount;

    #[Property]
    public ?\projectIdInPurchaseReceiptLineBasicUpdateDto $projectId;

    #[Property]
    public ?\projectTaskIdInPurchaseReceiptLineBasicUpdateDto $projectTaskId;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;

    #[Property]
    public ?\DtoValueOfString $lotSerialNumber;

    #[Property]
    public ?\poOrderTypeInPurchaseReceiptLineBasicUpdateDto $poOrderType;

    #[Property]
    public ?\poOrderNbrInPurchaseReceiptLineBasicUpdateDto $poOrderNbr;

    #[Property]
    public ?\poOrderLineNbrInPurchaseReceiptLineBasicUpdateDto $poOrderLineNbr;

    #[Property]
    public ?\transferOrderTypeInPurchaseReceiptLineBasicUpdateDto $transferOrderType;

    #[Property]
    public ?\transferOrderNbrInPurchaseReceiptLineBasicUpdateDto $transferOrderNbr;

    #[Property]
    public ?\transferOrderLineNbrInPurchaseReceiptLineBasicUpdateDto $transferOrderLineNbr;

    #[Property]
    public ?\completePoLineInPurchaseReceiptLineBasicUpdateDto $completePoLine;

    #[Property]
    public ?\customStr1InPurchaseReceiptLineBasicUpdateDto $customStr1;

    #[Property]
    public ?\customStr2InPurchaseReceiptLineBasicUpdateDto $customStr2;

    #[Property]
    public ?\customStr3InPurchaseReceiptLineBasicUpdateDto $customStr3;

    #[Property]
    public ?\customStr4InPurchaseReceiptLineBasicUpdateDto $customStr4;

    #[Property]
    public ?\customStr5InPurchaseReceiptLineBasicUpdateDto $customStr5;

    #[Property]
    public ?\customDec1InPurchaseReceiptLineBasicUpdateDto $customDec1;

    #[Property]
    public ?\customDec2InPurchaseReceiptLineBasicUpdateDto $customDec2;

    #[Property]
    public ?\customInt1InPurchaseReceiptLineBasicUpdateDto $customInt1;

    #[Property]
    public ?\customInt2InPurchaseReceiptLineBasicUpdateDto $customInt2;

    #[Property]
    public ?\customDateTimeUTC1InPurchaseReceiptLineBasicUpdateDto $customDateTimeUtc1;
}
