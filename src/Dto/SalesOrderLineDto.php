<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesOrderLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesOrderLineDtoFactory factory()
 */
class SalesOrderLineDto extends Model
{
    /** The reference number of the invoice generated for this order. This number is collected from the system and not visible on the sales order line. */
    #[Property]
    public ?string $invoiceNbr;

    /** The operation to be performed in the workspace to fulfil the order. This information is collected from the system and not visible on the sales order line. */
    #[Property]
    public ?string $operation;

    /** A check box that indicates (if selected) that the stock item specified in the row is a free item. This information is collected from the system and not visible on the sales order line. */
    #[Property]
    public ?bool $freeItem;

    /** Mandatory field: The top part  &gt; Requested on* &gt; The date when the customer wants to receive the goods. The default value is the current business date. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $requestedOn;

    /** Ship on &gt; The date when the item is to be shipped. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $shipOn;

    /** Shipping rule &gt; An option that controls whether incomplete and partial shipments for the order are allowed. (Values: Ship complete, Back order allowed, Cancel remainder) */
    #[Property]
    public ?string $shipComplete;

    /** Undership threshold (%) &gt; The minimal percentage of goods shipped (with respect to the ordered quantity) to consider the order shipped completely. */
    #[Property]
    public ?float $undershipThreshold;

    /** Overship threshold (%) &gt; The maximum percentage of goods shipped (with respect to the ordered quantity) allowed by the customer. */
    #[Property]
    public ?float $overshipThreshold;

    /** Completed &gt; A check box that can be selected to indicate to the system that this line is completed. */
    #[Property]
    public ?bool $completed;

    /** Mark for purchase order &gt; A check box that indicates (if selected) that the order line was marked for purchasing (if it has not been shipped completely). */
    #[Property]
    public ?bool $markForPo;

    /** Purchase order source &gt; The purchase order source to be used to fulfill this line, which can be one of the following options: Purchase to order, Drop-shipment. */
    #[Property]
    public ?string $poSource;

    /** Lot/serial no. &gt; The lot or serial number of the item for returns */
    #[Property]
    public ?string $lotSerialNbr;

    /** Expiration date &gt; The expiration date for the item with the specified lot number. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;

    /** Reason code &gt; The reason code to be used for creation or cancellation of the order, if applicable. */
    #[Property]
    public ?string $reasonCode;

    #[Property]
    public ?salesPersonInSalesOrderLineDto $salesPerson;

    /** VAT code &gt; The VAT category of the goods mentioned in this line. */
    #[Property]
    public ?string $taxCategory;

    /** VAT code &gt; The VAT category of the goods mentioned in this line. */
    #[Property]
    public ?bool $commissionable;

    /** Alternate ID &gt; The alternate ID for the item, such as the item ID used by the customer. */
    #[Property]
    public ?string $alternateId;

    /** Project task &gt; The particular task of the project with which this document is associated. */
    #[Property]
    public ?int $projectTask;

    /** Project task code &gt; The particular task code of the project with which this document is associated. */
    #[Property]
    public ?string $projectTaskCd;

    #[Property]
    public ?subaccountInSalesOrderLineDto $subaccount;

    #[Property]
    public ?string $externalLink;

    #[Property]
    public ?bool $isRotRutDeductible;

    /** Document details tab &gt; Line no. &gt; The line number of the document. */
    #[Property]
    public ?int $lineNbr;

    /** Document details tab &gt; Line order &gt; The order number of the document line. The system regenerates this number automatically when you reorder the lines in the table. */
    #[Property]
    public ?int $sortOrder;

    #[Property]
    public ?InventoryNumberDescriptionDto $inventory;

    #[Property]
    public ?WarehouseIdDescriptionDto $warehouse;

    /** Mandatory field: Document details tab &gt; UoM* &gt; The unit of measure (UoM) used for the item with this item ID. */
    #[Property]
    public ?string $uom;

    /** Document details tab &gt; Quantity &gt; The quantity of the item sold, measured in the UoM. */
    #[Property]
    public ?float $quantity;

    /** Document details tab &gt; Qty. on shipments &gt; A read-only column that displays the quantity of the stock item being prepared for shipment and already shipped for this order. */
    #[Property]
    public ?float $qtyOnShipments;

    /** Document details tab &gt; Open qty. &gt; The quantity of the item to be shipped; that is, the total quantity minus the quantity shipped according to closed shipment documents. */
    #[Property]
    public ?float $openQty;

    /** Document details tab &gt; Unit Cost &gt; The cost of the unit on the sales order. */
    #[Property]
    public ?float $unitCost;

    /** Document details tab &gt; Unit price &gt; The price of the unit on the sales order. */
    #[Property]
    public ?float $unitPrice;

    #[Property]
    public ?float $unitPriceInBaseCurrency;

    /** Mandatory field: Document details tab &gt; Discount details tab &gt; Discount code* &gt; The code of the discount that has been applied to this line. */
    #[Property]
    public ?string $discountCode;

    /** Document details tab &gt; Discount percent &gt; The percent of the line-level discount that has been applied manually or automatically to this line item (if the item is not a free item). */
    #[Property]
    public ?float $discountPercent;

    /** Document details tab &gt; Discount amount &gt; The amount of the line-level discount that has been applied manually or automatically to this line item (if the item is not a free item). */
    #[Property]
    public ?float $discountAmount;

    /** Document details tab &gt; Manual discount &gt; A check box that indicates (if selected) that the discount has been applied manually. */
    #[Property]
    public ?bool $manualDiscount;

    /** Document details tab &gt; Disc. unit price &gt; The unit price, which has been recalculated after the application of discounts. */
    #[Property]
    public ?float $discUnitPrice;

    /** Document details tab &gt; Extended cost &gt; The extended price, which is the unit price multiplied by the quantity. */
    #[Property]
    public ?float $extPrice;

    /** Document details tab &gt; Amount not yet invoiced &gt; The amount of cancelled shipments and cancelled remainders. */
    #[Property]
    public ?float $unbilledAmount;

    /** Document details tab &gt; Line description &gt; The description of the unit. */
    #[Property]
    public ?string $lineDescription;

    #[Property]
    public ?BranchNumberDto $branchNumber;

    /** Tables in tab &gt; Icon Notes &gt; Pop-up window for providing any user-defined text connected to the order. */
    #[Property]
    public ?string $note;

    /** The data containing information about the document attachments */
    #[Property]
    public ?array $attachments;
}
