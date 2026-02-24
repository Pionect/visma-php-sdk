<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a InventorySummary in InventorySummaryController. Used by getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\InventorySummaryDtoFactory testFactory()
 */
class InventorySummaryDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\InventorySummaryDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?InventoryInInventorySummaryDto $inventory = null,
        public ?WarehouseInInventorySummaryDto $warehouse = null,
        public ?LocationInInventorySummaryDto $location = null,
        /**
         * Available > The quantity of the stock items available at the specific
         * warehouse and location.
         */
        public int|float|null $available = null,
        /**
         * Available for shipment > The quantity of the stock items available at the
         * specific warehouse and location calculated based on the quantity on hand with
         * the quantities shipped and on shipping deducted.
         */
        public int|float|null $availableForShipment = null,
        /**
         * Not available > The quantity of the stock items on locations for which the
         * Include in qty. available option is not selected.
         */
        public int|float|null $notAvailable = null,
        /**
         * Sales order booked > The quantity of the stock items booked according to
         * sales orders.
         */
        public int|float|null $soBooked = null,
        /**
         * Sales order allocated > The quantity of stock items set aside according to
         * sales orders.
         */
        public int|float|null $soAllocated = null,
        /**
         * Sales orders shipped > The quantity of the stock items shipped according to
         * the confirmed shipments.
         */
        public int|float|null $soShipped = null,
        /**
         * Back orders > The quantity of the stock items on sales orders with the Back
         * order status.
         */
        public int|float|null $soBackOrdered = null,
        /**
         * Inventory issues > The quantity of the stock items included in the inventory
         * issue documents that have not yet been released.
         */
        public int|float|null $inIssues = null,
        /**
         * Invnetory receipts > The quantity of the stock items included in the
         * inventory receipt documents that have not yet been released.
         */
        public int|float|null $inReceipts = null,
        /**
         * In transit > The quantity of the stock items included as in transit
         * quantities in the inventory transfer documents that have not yet been
         * released.
         */
        public int|float|null $inTransit = null,
        /**
         * In assembly demand > The quantity of the stock items included in unreleased
         * kit assembly documents as components or kits, depending on whether the item
         * is a kit or a kit component.
         */
        public int|float|null $inAssemblyDemand = null,
        /**
         * In assembly supply > The quantity of the stock items listed on unreleased kit
         * assembly documents.
         */
        public int|float|null $inAssemblySupply = null,
        /**
         * Purchase prepared > The quantity of the stock items listed on purchase orders
         * pending approval and on hold.
         */
        public int|float|null $purchasePrepared = null,
        /**
         * Purchase orders > The quantity of the stock items included in open purchase
         * orders. To view the purchase orders, open the Purchase orders (PO301000)
         * window.
         */
        public int|float|null $purchaseOrders = null,
        /**
         * Purchase order receipts > The quantity of the stock items included in the
         * purchase receipts that have not yet been released. To view the purchase
         * receipts, open the Purchase receipts (PO302000) window.
         */
        public int|float|null $poReceipts = null,
        /**
         * Expired > The quantity of the stock items that has reached its expiration
         * date.
         */
        public int|float|null $expired = null,
        /**
         * On hand > The quantity of the stock items available on hand at the specified
         * warehouse and location.
         */
        public int|float|null $onHand = null,
        /**
         * Sales order to purchase > The quantity of the stock items included in
         * unreleased sales orders requiring creating purchase orders.
         */
        public int|float|null $soToPurchase = null,
        /**
         * Purchase for sales order. > The quantity of the stock items listed on open
         * purchase orders created for sales orders.
         */
        #[MapName('purchaseForSO')]
        public int|float|null $purchaseForSo = null,
        /**
         * Purchase for sales order prepared > The quantity of the stock items listed on
         * purchase orders yet on hold or pending approval and created for back orders.
         */
        #[MapName('purchaseForSOPrepared')]
        public int|float|null $purchaseForSoprepared = null,
        /**
         * Purchase for sales order receipts > The quantity of the stock items listed on
         * purchase receipts for orders that were created for sales orders.
         */
        #[MapName('purchaseForSOReceipts')]
        public int|float|null $purchaseForSoreceipts = null,
        /**
         * Sales order to drop-ship > The quantity of the stock items included in open
         * purchase orders created for drop-ship orders.
         */
        public int|float|null $soToDropShip = null,
        /**
         * Drop-ship for sales order > The quantity of the stock items listed on open
         * drop-ship orders. This value is not included in the quantity available.
         */
        #[MapName('dropShipForSO')]
        public int|float|null $dropShipForSo = null,
        /**
         * Drop-ship for sales order, prepared > The quantity of the stock items listed
         * on drop-ship sales orders with a status of On hold or Pending approval; this
         * value is not included in the quantity available.
         */
        #[MapName('dropShipForSOPrepared')]
        public int|float|null $dropShipForSoprepared = null,
        /**
         * Drop-ship for sales order, receipts > The quantity of the stock items listed
         * on receipts for drop-ship sales orders; this value is not included in the
         * quantity available.
         */
        #[MapName('dropShipForSOReceipts')]
        public int|float|null $dropShipForSoreceipts = null,
        /**
         * Base unit > The unit of measure (UoM) selected as the base unit for the stock
         * items in the Stock items (IN202500) window.
         */
        public ?string $baseUnit = null,
        /** Estimated unit cost > The estimated unit cost of the selected stock items. */
        public int|float|null $estimatedUnitCost = null,
        /**
         * Estimated total cost > The estimated total cost of the stock items available
         * at the specified warehouse and location.
         */
        public int|float|null $estimatedTotalCost = null,
        public ?string $errorInfo = null,
    ) {}
}
