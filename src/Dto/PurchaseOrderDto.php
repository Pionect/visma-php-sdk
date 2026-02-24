<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\PurchaseOrderLineOrderTypeEnum;
use Pionect\VismaSdk\Enums\PurchaseOrderShippingDestinationTypeEnum;
use Pionect\VismaSdk\Enums\PurchaseOrderStatusEnum;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Purchase Order in PurchaseOrderController. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseOrderDtoFactory testFactory()
 */
class PurchaseOrderDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\PurchaseOrderDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Shipping instructions tab > The Delivery address section > Shipping
         * destination type > The type of the shipping destination, which is one of the
         * following options: Branch location (meaning a branch of your company),
         * Customer, Supplier, and Warehouse.
         */
        public ?PurchaseOrderShippingDestinationTypeEnum $shippingDestinationType = null,
        public ?ShipToInPurchaseOrderDto $shipTo = null,
        public ?ShippingLocationInPurchaseOrderDto $shippingLocation = null,
        public ?WarehouseInPurchaseOrderDto $warehouse = null,
        public ?ShippingContactInPurchaseOrderDto $shippingContact = null,
        public ?ShippingAddressInPurchaseOrderDto $shippingAddress = null,
        /**
         * Delivery instructions tab > The Delivery instructions section > FOB point >
         * The FOB point where the title of goods (listed on this purchase order) is
         * transferred from the supplier to the company.
         */
        public ?string $fobPoint = null,
        /**
         * Delivery instructions tab > The Delivery instructions section > Ship via >
         * The carrier selected to ship the goods for the purchase order.
         */
        public ?string $shipVia = null,
        /**
         * Delivery instructions tab > The Delivery instructions section > Shipping
         * terms > The shipping terms for the purchase order.
         */
        public ?string $shipTerms = null,
        public ?RemitContactInPurchaseOrderDto $remitContact = null,
        public ?RemitAddressInPurchaseOrderDto $remitAddress = null,
        public ?TermsInPurchaseOrderDto $terms = null,
        public ?SupplierVatZoneInPurchaseOrderDto $supplierVatZone = null,
        /**
         * @var DiscountDetailDto[]|null
         *                               Discount details tab >
         */
        public ?array $discountDetails = null,
        /**
         * Other information tab > Sales order type > The type of the sales order
         * associated with the purchase order.
         */
        public ?string $salesOrderType = null,
        /**
         * Other information tab > Sales order no. > The ID of the sales order
         * associated with the purchase order.
         */
        public ?string $salesOrderNbr = null,
        /**
         * Other information tab > Requisition ref. no. > The reference number of the
         * requisition document associated with the purchase order, if any.
         */
        public ?string $requisitionRefNbr = null,
        /**
         * Other information tab > Prepayment ref. no. > The reference number of the
         * prepayment request linked to this purchase order, if any.
         */
        public ?string $paymentRefNbr = null,
        /**
         * Other information tab > Work group ID > The work group to which the purchase
         * order was assigned for processing.
         */
        #[MapName('workgroupID')]
        public ?int $workgroupId = null,
        /**
         * Other information > Do not print > A check box that indicates (if selected)
         * that the current purchase order should not be printed.
         */
        public ?bool $dontPrint = null,
        /**
         * Other information > Printed > A check box that indicates (if selected) that
         * the current purchase order was printed.
         */
        public ?bool $printed = null,
        /**
         * Other information > Do not email > A check box that indicates (if selected)
         * indicates that the purchase order should not be emailed.
         */
        public ?bool $dontEmail = null,
        /**
         * Other information > Emailed > A check box that indicates (if selected)
         * indicates that the current purchase order was emailed.
         */
        public ?bool $emailed = null,
        /**
         * Other information > Open Quantity > The difference between the quantities of
         * ordered and received items.
         */
        public int|float|null $openQuantity = null,
        /**
         * Other information > Open amount > The amount of these items that are ordered
         * but not received.
         */
        public int|float|null $openBalance = null,
        /**
         * The top part > Type > The type of the purchase order, which can be one of
         * these options: Normal, Drop-ship, Blanket, Default
         */
        public ?PurchaseOrderLineOrderTypeEnum $orderType = null,
        /**
         * The top part > Order no. > The unique reference number of the purchase order,
         * which the system assigns based on the number series assigned to purchase
         * orders of this type, as specified in the PO101000 window.
         */
        public ?string $orderNbr = null,
        /**
         * The top part > Hold > A check box that you select to give the purchase order
         * the On hold status.
         */
        public ?bool $hold = null,
        /**
         * The top part > Status > The system-generated status of the purchase order,
         * which can be one of the following options: On hold, Open, Pending approval,
         * Rejected, Pending printing, Pending e-mail, Closed, Cancelled.
         */
        public ?PurchaseOrderStatusEnum $status = null,
        /**
         * Mandatory field: The top part > Date* > The date when the purchase order was
         * created.
         */
        public ?\Carbon\Carbon $date = null,
        /**
         * The top part > Delivery date > The date when the supplier promised that the
         * items listed in the order will be received at their destination location.
         */
        public ?\Carbon\Carbon $promisedOn = null,
        /** The top part > Description > A brief description of the purchase order. */
        public ?string $description = null,
        public ?SupplierInPurchaseOrderDto $supplier = null,
        public ?LocationInPurchaseOrderDto $location = null,
        public ?OwnerInPurchaseOrderDto $owner = null,
        /** The top part > Currency > The currency the purchase order will be paid in. */
        public ?string $currency = null,
        /**
         * The top part > Supplier ref. > The reference number of the supplier document
         * related to this purchase order.
         */
        public ?string $supplierRef = null,
        public int|float|null $exchangeRate = null,
        /**
         * The top part > Line total > The total sum of the Extended amount entries for
         * all lines in the current purchase order. This value is calculated by the
         * system and users cannot manually change it.
         */
        public int|float|null $lineTotal = null,
        /**
         * The top part > View base > A button that recalculates the Line total to your
         * base currency if the amount on the purchase order is in another currency then
         * base currency. When you click the button, the button toggles to View
         * currency.
         */
        public int|float|null $lineTotalInBaseCurrency = null,
        /**
         * The Top part > VAT exempt total > The document total that is exempt from VAT.
         * This total is calculated as the taxable amount for the VAT with the Include
         * in VAT exempt total check box selected in the TX205000 window.
         */
        public int|float|null $vatExemptTotal = null,
        /**
         * The top part > View base > A button that recalculates the VAT exempt total to
         * your base currency if the amount on the purchase order is in another currency
         * then base currency. When you click the button, the button toggles to View
         * currency.
         */
        public int|float|null $vatExemptTotalInBaseCurrency = null,
        /**
         * The Top part > VAT total > The total VAT amount for all lines added to the
         * current purchase order. This value, also calculated by the system, is the sum
         * of the VAT amounts for each line.
         */
        public int|float|null $taxTotal = null,
        /**
         * The top part > View base > A button that recalculates the VAT total to your
         * base currency if the amount on the purchase order is in another currency then
         * base currency. When you click the button, the button toggles to View
         * currency.
         */
        public int|float|null $taxTotalInBaseCurrency = null,
        /**
         * The Top part > Order total > The total sum for the purchase order, including
         * VAT. This read-only value is the sum of the Line total and VAT total values.
         */
        public int|float|null $orderTotal = null,
        /**
         * The top part > View base > A button that recalculates the Order total to your
         * base currency if the amount on the purchase order is in another currency then
         * base currency. When you click the button, the button toggles to View
         * currency.
         */
        public int|float|null $orderTotalInBaseCurrency = null,
        /**
         * The top part > Control total > The order's total amount (including VAT),
         * which you must enter manually when you attempt to save the order with the
         * Balanced status.
         */
        public int|float|null $controlTotal = null,
        /**
         * The top part > View base > A button that recalculates the Control total to
         * your base currency if the amount on the purchase order is in another currency
         * then base currency. When you click the button, the button toggles to View
         * currency.
         */
        public int|float|null $controlTotalInBaseCurrency = null,
        public ?BranchInPurchaseOrderDto $branch = null,
        /**
         * @var PurchaseOrderLineDto[]|null
         *                                  Document details tab > The table >
         */
        public ?array $lines = null,
        /**
         * @var TaxDetailDto[]|null
         *                          VAT details tab >
         */
        public ?array $taxDetails = null,
        /**
         * @var PurchaseReceiptsDto[]|null
         *                                 Purchase receipts tab >
         */
        public ?array $purchaseReceipts = null,
        /** System generated information. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /**
         * Icon Notes on top of the window > Pop-up window for providing any
         * user-defined text connected to the document.
         */
        public ?string $note = null,
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
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
