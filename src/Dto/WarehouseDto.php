<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * This class represents a Warehouse in WarehouseController. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseDtoFactory testFactory()
 */
class WarehouseDto extends Model
{
    public function __construct(
        #[MapName('warehouseID')]
        public ?string $warehouseId = null,
        public ?BranchInWarehouseDto $branch = null,
        public ?ReplenishmentClassInWarehouseDto $replenishmentClass = null,
        public ?bool $active = null,
        #[MapName('lockSitePICountEntry')]
        public ?bool $lockSitePicountEntry = null,
        public ?string $description = null,
        public ?string $locationEntry = null,
        public ?string $avgDefaultCost = null,
        public ?string $fifoDefaultCost = null,
        public ?ReceiptLocationInWarehouseDto $receiptLocation = null,
        public ?ShipLocationInWarehouseDto $shipLocation = null,
        public ?ReturnLocationInWarehouseDto $returnLocation = null,
        public ?DropShipLocationInWarehouseDto $dropShipLocation = null,
        public ?ContactInWarehouseDto $contact = null,
        public ?AddressInWarehouseDto $address = null,
        public ?array $locations = null,
        public ?string $timestamp = null,
    ) {}
}
