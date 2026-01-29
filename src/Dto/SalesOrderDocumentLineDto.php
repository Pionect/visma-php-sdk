<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a SOOrder in SOOrderController. Used by getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesOrderDocumentLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesOrderDocumentLineDtoFactory factory()
 */
class SalesOrderDocumentLineDto extends Model
{
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
