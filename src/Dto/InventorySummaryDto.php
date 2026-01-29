<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a InventorySummary in InventorySummaryController. Used by getting data.
 */
class InventorySummaryDto extends Model
{
    #[Property]
    public ?inventoryInInventorySummaryDto $inventory;

    #[Property]
    public ?warehouseInInventorySummaryDto $warehouse;

    #[Property]
    public ?locationInInventorySummaryDto $location;

    /** The table &gt; Available &gt; The quantity of the stock items available at the specific warehouse and location. */
    #[Property]
    public ?float $available;

    /** The table &gt; Available for shipment &gt; The quantity of the stock items available at the specific warehouse and location calculated based on the quantity on hand with the quantities shipped and on shipping deducted. */
    #[Property]
    public ?float $availableForShipment;

    /** The table &gt; Not available &gt; The quantity of the stock items on locations for which the Include in qty. available option is not selected. */
    #[Property]
    public ?float $notAvailable;

    /** The table &gt; Sales order booked &gt; The quantity of the stock items booked according to sales orders. */
    #[Property]
    public ?float $soBooked;

    /** The table &gt; Sales order allocated &gt; The quantity of stock items set aside according to sales orders. */
    #[Property]
    public ?float $soAllocated;

    /** The table &gt; Sales orders shipped &gt; The quantity of the stock items shipped according to the confirmed shipments. */
    #[Property]
    public ?float $soShipped;

    /** The table &gt; Back orders &gt; The quantity of the stock items on sales orders with the Back order status. */
    #[Property]
    public ?float $soBackOrdered;

    /** The table &gt; Inventory issues &gt; The quantity of the stock items included in the inventory issue documents that have not yet been released. */
    #[Property]
    public ?float $inIssues;

    /** The table &gt; Invnetory receipts &gt; The quantity of the stock items included in the inventory receipt documents that have not yet been released. */
    #[Property]
    public ?float $inReceipts;

    /** The table &gt; In transit &gt; The quantity of the stock items included as in transit quantities in the inventory transfer documents that have not yet been released. */
    #[Property]
    public ?float $inTransit;

    /** The table &gt; In assembly demand &gt; The quantity of the stock items included in unreleased kit assembly documents as components or kits, depending on whether the item is a kit or a kit component. */
    #[Property]
    public ?float $inAssemblyDemand;

    /** The table &gt; In assembly supply &gt; The quantity of the stock items listed on unreleased kit assembly documents. */
    #[Property]
    public ?float $inAssemblySupply;

    /** The table &gt; Purchase prepared &gt; The quantity of the stock items listed on purchase orders pending approval and on hold. */
    #[Property]
    public ?float $purchasePrepared;

    /** The table &gt; Purchase orders &gt; The quantity of the stock items included in open purchase orders. To view the purchase orders, open the Purchase orders (PO301000) window. */
    #[Property]
    public ?float $purchaseOrders;

    /** The table &gt; Purchase order receipts &gt; The quantity of the stock items included in the purchase receipts that have not yet been released. To view the purchase receipts, open the Purchase receipts (PO302000) window. */
    #[Property]
    public ?float $poReceipts;

    /** The table &gt; Expired &gt; The quantity of the stock items that has reached its expiration date. */
    #[Property]
    public ?float $expired;

    /** The table &gt; On hand &gt; The quantity of the stock items available on hand at the specified warehouse and location. */
    #[Property]
    public ?float $onHand;

    /** The table &gt; Sales order to purchase &gt; The quantity of the stock items included in unreleased sales orders requiring creating purchase orders. */
    #[Property]
    public ?float $soToPurchase;

    /** The table &gt; Purchase for sales order. &gt; The quantity of the stock items listed on open purchase orders created for sales orders. */
    #[Property]
    public ?float $purchaseForSo;

    /** The table &gt; Purchase for sales order prepared &gt; The quantity of the stock items listed on purchase orders yet on hold or pending approval and created for back orders. */
    #[Property]
    public ?float $purchaseForSoprepared;

    /** The table &gt; Purchase for sales order receipts &gt; The quantity of the stock items listed on purchase receipts for orders that were created for sales orders. */
    #[Property]
    public ?float $purchaseForSoreceipts;

    /** The table &gt; Sales order to drop-ship &gt; The quantity of the stock items included in open purchase orders created for drop-ship orders. */
    #[Property]
    public ?float $soToDropShip;

    /** The table &gt; Drop-ship for sales order &gt; The quantity of the stock items listed on open drop-ship orders. This value is not included in the quantity available. */
    #[Property]
    public ?float $dropShipForSo;

    /** The table &gt; Drop-ship for sales order, prepared &gt; The quantity of the stock items listed on drop-ship sales orders with a status of On hold or Pending approval; this value is not included in the quantity available. */
    #[Property]
    public ?float $dropShipForSoprepared;

    /** The table &gt; Drop-ship for sales order, receipts &gt; The quantity of the stock items listed on receipts for drop-ship sales orders; this value is not included in the quantity available. */
    #[Property]
    public ?float $dropShipForSoreceipts;

    /** The table &gt; Base unit &gt; The unit of measure (UoM) selected as the base unit for the stock items in the Stock items (IN202500) window. */
    #[Property]
    public ?string $baseUnit;

    /** The table &gt; Estimated unit cost &gt; The estimated unit cost of the selected stock items. */
    #[Property]
    public ?float $estimatedUnitCost;

    /** The table &gt; Estimated total cost &gt; The estimated total cost of the stock items available at the specified warehouse and location. */
    #[Property]
    public ?float $estimatedTotalCost;

    #[Property]
    public ?string $errorInfo;
}
