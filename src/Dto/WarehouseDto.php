<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\WarehouseAvgDefaultCostEnum;
use Pionect\VismaSdk\Enums\WarehouseLocationEntryEnum;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Warehouse in WarehouseController. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseDtoFactory testFactory()
 */
class WarehouseDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Mandatory field: The top part > Warehouse ID* > The unique ID of the
         * warehouse.
         */
        #[MapName('warehouseID')]
        public ?string $warehouseId = null,
        public ?BranchInWarehouseDto $branch = null,
        public ?ReplenishmentClassInWarehouseDto $replenishmentClass = null,
        /**
         * The top part > Active > This check box indicates (if selected) that the
         * warehouse is active.
         */
        public ?bool $active = null,
        /**
         * The top part > Freeze the inventory when the stocktaking is in data entry
         * state > This check box indicates (if selected) that the inventory in the
         * warehouse will be frozen during the stocktaking and data entry stages of
         * stocktaking.
         */
        #[MapName('lockSitePICountEntry')]
        public ?bool $lockSitePicountEntry = null,
        /** The top part > Description > A brief description of the warehouse. */
        public ?string $description = null,
        /**
         * The top part > Location entry > An option indicating whether warehouse
         * locations can be added directly on any inventory document or only by using
         * this window.
         */
        public ?WarehouseLocationEntryEnum $locationEntry = null,
        /**
         * The top part > Avg. default return cost > For items with the Average
         * valuation method, the option that defines which of costs should be used for
         * returns and receipts.
         */
        public ?WarehouseAvgDefaultCostEnum $avgDefaultCost = null,
        /**
         * The top part > FIFO default returns cost > For items with the FIFO valuation
         * method, the option that defines which of costs should be used for returns and
         * receipts.
         */
        public ?WarehouseAvgDefaultCostEnum $fifoDefaultCost = null,
        public ?ReceiptLocationInWarehouseDto $receiptLocation = null,
        public ?ShipLocationInWarehouseDto $shipLocation = null,
        public ?ReturnLocationInWarehouseDto $returnLocation = null,
        public ?DropShipLocationInWarehouseDto $dropShipLocation = null,
        public ?ContactInWarehouseDto $contact = null,
        public ?AddressInWarehouseDto $address = null,
        /**
         * @var WarehouseLocationDto[]|null
         *                                  Location table tab > The location table >
         */
        public ?array $locations = null,
        /** Timestamp of the warehouse record */
        public ?string $timestamp = null,
    ) {}
}
