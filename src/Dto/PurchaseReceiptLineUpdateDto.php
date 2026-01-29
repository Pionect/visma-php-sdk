<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represents a Purchase Order Line in PurchaseReceiptContraoller. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseReceiptLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptLineUpdateDtoFactory factory()
 */
class PurchaseReceiptLineUpdateDto extends Model
{
    #[Property]
    public ?array $allocations;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $note;

    #[Property]
    public ?string $operation;

    #[Property]
    public ?lineNbrInPurchaseReceiptLineUpdateDto $lineNbr;

    #[Property]
    public ?lineTypeInPurchaseReceiptLineUpdateDto $lineType;

    #[Property]
    public ?branchIdInPurchaseReceiptLineUpdateDto $branchId;

    #[Property]
    public ?branchNumberInPurchaseReceiptLineUpdateDto $branchNumber;

    #[Property]
    public ?inventoryIdInPurchaseReceiptLineUpdateDto $inventoryId;

    #[Property]
    public ?warehouseIdInPurchaseReceiptLineUpdateDto $warehouseId;

    #[Property]
    public ?locationIdInPurchaseReceiptLineUpdateDto $locationId;

    #[Property]
    public ?transactionDescriptionInPurchaseReceiptLineUpdateDto $transactionDescription;

    #[Property]
    public ?uomInPurchaseReceiptLineUpdateDto $uom;

    #[Property]
    public ?receiptQtyInPurchaseReceiptLineUpdateDto $receiptQty;

    #[Property]
    public ?unitCostInPurchaseReceiptLineUpdateDto $unitCost;

    #[Property]
    public ?extCostInPurchaseReceiptLineUpdateDto $extCost;

    #[Property]
    public ?discountPercentInPurchaseReceiptLineUpdateDto $discountPercent;

    #[Property]
    public ?discountAmountInPurchaseReceiptLineUpdateDto $discountAmount;

    #[Property]
    public ?manualDiscountInPurchaseReceiptLineUpdateDto $manualDiscount;

    #[Property]
    public ?discountCodeIdInPurchaseReceiptLineUpdateDto $discountCodeId;

    #[Property]
    public ?amountInPurchaseReceiptLineUpdateDto $amount;

    #[Property]
    public ?taxCategoryIdInPurchaseReceiptLineUpdateDto $taxCategoryId;

    #[Property]
    public ?accountIdInPurchaseReceiptLineUpdateDto $accountId;

    #[Property]
    public ?accountDescriptionInPurchaseReceiptLineUpdateDto $accountDescription;

    /** The Document details tab &gt; The subaccount to be used to record the non-stock item amount on the purchase receipt (for non-stock items for which receipts are not required). */
    #[Property]
    public ?array $subaccount;

    #[Property]
    public ?actualAccountIdInPurchaseReceiptLineUpdateDto $actualAccountId;

    /** The Document details tab &gt; The subaccount used to record the item amount on the purchase receipt, used for stock items and non-stock items for which a receipt is required. */
    #[Property]
    public ?array $actualSubaccount;

    #[Property]
    public ?projectIdInPurchaseReceiptLineUpdateDto $projectId;

    #[Property]
    public ?projectTaskIdInPurchaseReceiptLineUpdateDto $projectTaskId;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $lotSerialNumber;

    #[Property]
    public ?poOrderTypeInPurchaseReceiptLineUpdateDto $poOrderType;

    #[Property]
    public ?poOrderNbrInPurchaseReceiptLineUpdateDto $poOrderNbr;

    #[Property]
    public ?poOrderLineNbrInPurchaseReceiptLineUpdateDto $poOrderLineNbr;

    #[Property]
    public ?transferOrderTypeInPurchaseReceiptLineUpdateDto $transferOrderType;

    #[Property]
    public ?transferOrderNbrInPurchaseReceiptLineUpdateDto $transferOrderNbr;

    #[Property]
    public ?transferOrderLineNbrInPurchaseReceiptLineUpdateDto $transferOrderLineNbr;

    #[Property]
    public ?completePoLineInPurchaseReceiptLineUpdateDto $completePoLine;

    #[Property]
    public ?customStr1InPurchaseReceiptLineUpdateDto $customStr1;

    #[Property]
    public ?customStr2InPurchaseReceiptLineUpdateDto $customStr2;

    #[Property]
    public ?customStr3InPurchaseReceiptLineUpdateDto $customStr3;

    #[Property]
    public ?customStr4InPurchaseReceiptLineUpdateDto $customStr4;

    #[Property]
    public ?customStr5InPurchaseReceiptLineUpdateDto $customStr5;

    #[Property]
    public ?customDec1InPurchaseReceiptLineUpdateDto $customDec1;

    #[Property]
    public ?customDec2InPurchaseReceiptLineUpdateDto $customDec2;

    #[Property]
    public ?customInt1InPurchaseReceiptLineUpdateDto $customInt1;

    #[Property]
    public ?customInt2InPurchaseReceiptLineUpdateDto $customInt2;

    #[Property]
    public ?customDateTimeUTC1InPurchaseReceiptLineUpdateDto $customDateTimeUtc1;
}
