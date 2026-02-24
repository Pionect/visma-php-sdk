<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\PurchaseOrderLineLineTypeEnum;
use Pionect\VismaSdk\Enums\PurchaseOrderLineOrderTypeEnum;
use Pionect\VismaSdk\Enums\PurchaseReceiptLineTransferOrderTypeEnum;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Purchase Order Line in PurchaseReceiptContraoller. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptLineDtoFactory testFactory()
 */
class PurchaseReceiptLineDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\PurchaseReceiptLineDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** @var AllocationsDto[]|null */
        public ?array $allocations = null,
        public ?string $note = null,
        /**
         * Document details tab > Base receipt qty. > The quantity of the item received
         * in the base unit of measure.
         */
        public int|float|null $baseReceiptQty = null,
        /** The line number */
        public ?int $lineNbr = null,
        public ?BranchInPurchaseReceiptLineDto $branch = null,
        public ?BranchNumberInPurchaseReceiptLineDto $branchNumber = null,
        public ?InventoryNumberDescriptionDto $inventory = null,
        /** Document details tab > Line type > The type of the purchase order line. */
        public ?PurchaseOrderLineLineTypeEnum $lineType = null,
        public ?WarehouseInPurchaseReceiptLineDto $warehouse = null,
        public ?LocationInPurchaseReceiptLineDto $location = null,
        /**
         * Document details tab > Transaction descr. > The description of the receipt or
         * return transaction.
         */
        public ?string $transactionDescription = null,
        /**
         * Document details tab > UoM > The unit of measure (UoM) used for the purchased
         * or transferred item.
         */
        public ?string $uom = null,
        /**
         * Document details tab > Ordered qty.  > The quantity of the purchased item (in
         * the specified UoM).
         */
        public int|float|null $orderQty = null,
        /**
         * Document details tab > Open qty. > The quantity of the stock item yet to be
         * received on the purchase order.
         */
        public int|float|null $openQty = null,
        /**
         * Document details tab > Receipts qty. > 	The quantity of the item (with the
         * specified subitem code) in the specified UoM that has been received (listed
         * on released receipts).
         */
        public int|float|null $receiptQty = null,
        /** Document details tab > Unit cost > The cost of a unit of the purchased item. */
        public int|float|null $unitCost = null,
        /**
         * Document details tab > Cost > The cost of the item, which is the unit price
         * multiplied by the quantity.
         */
        public int|float|null $extCost = null,
        /**
         * Document details tab > Discount percent > If the Supplier and customer
         * discounts functionality is enabled, the percent of the discount that has been
         * entered manually or calculated based on the discount amount entered manually
         * for this line item.
         */
        public int|float|null $discountPercent = null,
        /**
         * Document details tab > Discount amount > If the Supplier and customer
         * discounts functionality is enabled, the amount of the discount that has been
         * specified manually or calculated based on the discount percent entered
         * manually.
         */
        public int|float|null $discountAmount = null,
        /**
         * Document details tab > Manual discount > A check box that indicates (if
         * selected) that the discount has been applied manually.
         */
        public ?bool $manualDiscount = null,
        public ?DiscountCodeInPurchaseReceiptLineDto $discountCode = null,
        /**
         * Document details tab > Amount > The amount calculated (after discount has
         * been taken) for the item.
         */
        public int|float|null $amount = null,
        public ?TaxCategoryInPurchaseReceiptLineDto $taxCategory = null,
        public ?AccountInPurchaseReceiptLineDto $account = null,
        /** Document details tab > Description > The description of this account. */
        public ?string $accountDescription = null,
        public ?SubInPurchaseReceiptLineDto $sub = null,
        public ?ActualAccountInPurchaseReceiptLineDto $actualAccount = null,
        public ?ActualSubInPurchaseReceiptLineDto $actualSub = null,
        public ?ProjectInPurchaseReceiptLineDto $project = null,
        public ?ProjectTaskInPurchaseReceiptLineDto $projectTask = null,
        /**
         * Document details tab > Expiration date > The expiration date of the received
         * item.
         */
        public ?\Carbon\Carbon $expirationDate = null,
        /**
         * Document details tab > Lot/serial no. > The lot or serial number assigned to
         * the received quantity of the purchased item.
         */
        public ?string $lotSerialNumber = null,
        /**
         * Document details tab > Purchase order type > The type of the purchase order
         * related to this purchase receipt.
         */
        public ?PurchaseOrderLineOrderTypeEnum $poOrderType = null,
        /**
         * Document details tab > Purchase order no. > The reference number of the
         * purchase order related to this purchase receipt.
         */
        public ?string $poOrderNbr = null,
        /**
         * Document details tab > Purchase order line no. > The line number of the
         * purchase order related to this line of the purchase receipt.
         */
        public ?int $poOrderLineNbr = null,
        /**
         * Document details tab > Transfer order type > The type of the transfer order
         * to which this receipt is linked.
         */
        public ?PurchaseReceiptLineTransferOrderTypeEnum $transferOrderType = null,
        /**
         * Document details tab > Transfer order no. > The reference number of the
         * transfer order to which this receipt is linked.
         */
        public ?string $transferOrderNbr = null,
        /**
         * Document details tab > Transfer line no > The line number in the transfer
         * order to which this receipt is linked.
         */
        public ?int $transferOrderLineNbr = null,
        /**
         * Document details tab > Complelete purchase line > A check box that indicates
         * to the system (if selected) that the purchase order line added to this
         * receipt line should be considered completed upon release of this purchase
         * receipt.
         */
        public ?bool $completePoLine = null,
        /** A free custom colum of type string with max length 100. */
        public ?string $customStr1 = null,
        /** A free custom colum of type string with max length 100. */
        public ?string $customStr2 = null,
        /** A free custom colum of type string with max length 100. */
        public ?string $customStr3 = null,
        /** A free custom colum of type string with max length 100. */
        public ?string $customStr4 = null,
        /** A free custom colum of type string with max length 100. */
        public ?string $customStr5 = null,
        /** A free custom colum of type decimal with max 4 decimals. */
        public int|float|null $customDec1 = null,
        /** A free custom colum of type decimal with max 4 decimals. */
        public int|float|null $customDec2 = null,
        /** A free custom colum of type int */
        public ?int $customInt1 = null,
        /** A free custom colum of type int */
        public ?int $customInt2 = null,
        /** A free custom colum of type DateTime - in UTC timezone */
        #[MapName('customDateTimeUTC1')]
        public ?\Carbon\Carbon $customDateTimeUtc1 = null,
    ) {}
}
