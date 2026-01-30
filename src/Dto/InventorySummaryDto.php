<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * This class represents a InventorySummary in InventorySummaryController. Used by getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventorySummaryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventorySummaryDtoFactory factory()
 */
class InventorySummaryDto extends Model
{
    public function __construct(
        public ?InventoryInInventorySummaryDto $inventory = null,
        public ?WarehouseInInventorySummaryDto $warehouse = null,
        public ?LocationInInventorySummaryDto $location = null,
        public int|float|null $available = null,
        public int|float|null $availableForShipment = null,
        public int|float|null $notAvailable = null,
        public int|float|null $soBooked = null,
        public int|float|null $soAllocated = null,
        public int|float|null $soShipped = null,
        public int|float|null $soBackOrdered = null,
        public int|float|null $inIssues = null,
        public int|float|null $inReceipts = null,
        public int|float|null $inTransit = null,
        public int|float|null $inAssemblyDemand = null,
        public int|float|null $inAssemblySupply = null,
        public int|float|null $purchasePrepared = null,
        public int|float|null $purchaseOrders = null,
        public int|float|null $poReceipts = null,
        public int|float|null $expired = null,
        public int|float|null $onHand = null,
        public int|float|null $soToPurchase = null,
        #[MapName('purchaseForSO')]
        public int|float|null $purchaseForSo = null,
        #[MapName('purchaseForSOPrepared')]
        public int|float|null $purchaseForSoprepared = null,
        #[MapName('purchaseForSOReceipts')]
        public int|float|null $purchaseForSoreceipts = null,
        public int|float|null $soToDropShip = null,
        #[MapName('dropShipForSO')]
        public int|float|null $dropShipForSo = null,
        #[MapName('dropShipForSOPrepared')]
        public int|float|null $dropShipForSoprepared = null,
        #[MapName('dropShipForSOReceipts')]
        public int|float|null $dropShipForSoreceipts = null,
        public ?string $baseUnit = null,
        public int|float|null $estimatedUnitCost = null,
        public int|float|null $estimatedTotalCost = null,
        public ?string $errorInfo = null,
    ) {}
}
