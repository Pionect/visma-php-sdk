<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Warehouse in WarehouseController. Used for getting data.
 */
class WarehouseDto extends Model
{
    /** Mandatory field: The top part &gt; Warehouse ID* &gt; The unique ID of the warehouse. */
    #[Property]
    public ?string $warehouseId;

    #[Property]
    public ?branchInWarehouseDto $branch;

    #[Property]
    public ?replenishmentClassInWarehouseDto $replenishmentClass;

    /** The top part &gt; Active &gt; This check box indicates (if selected) that the warehouse is active. */
    #[Property]
    public ?bool $active;

    /** The top part &gt; Freeze the inventory when the stocktaking is in data entry state &gt; This check box indicates (if selected) that the inventory in the warehouse will be frozen during the stocktaking and data entry stages of stocktaking. */
    #[Property]
    public ?bool $lockSitePicountEntry;

    /** The top part &gt; Description &gt; A brief description of the warehouse. */
    #[Property]
    public ?string $description;

    /** The top part &gt; Location entry &gt; An option indicating whether warehouse locations can be added directly on any inventory document or only by using this window. */
    #[Property]
    public ?string $locationEntry;

    /** The top part &gt; Avg. default return cost &gt; For items with the Average valuation method, the option that defines which of costs should be used for returns and receipts. */
    #[Property]
    public ?string $avgDefaultCost;

    /** The top part &gt; FIFO default returns cost &gt; For items with the FIFO valuation method, the option that defines which of costs should be used for returns and receipts. */
    #[Property]
    public ?string $fifoDefaultCost;

    #[Property]
    public ?receiptLocationInWarehouseDto $receiptLocation;

    #[Property]
    public ?shipLocationInWarehouseDto $shipLocation;

    #[Property]
    public ?returnLocationInWarehouseDto $returnLocation;

    #[Property]
    public ?dropShipLocationInWarehouseDto $dropShipLocation;

    #[Property]
    public ?contactInWarehouseDto $contact;

    #[Property]
    public ?addressInWarehouseDto $address;

    /** Location table tab &gt; The location table &gt; */
    #[Property]
    public ?array $locations;

    /** Timestamp of the warehouse record */
    #[Property]
    public ?string $timestamp;
}
