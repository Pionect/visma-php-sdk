<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * This class represents a Purchase Order Line in PurchaseOrderController. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseOrderLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseOrderLineDtoFactory factory()
 */
class PurchaseOrderLineDto extends Model
{
    public function __construct(
        public ?int $lineNbr = null,
        public ?BranchInPurchaseOrderLineDto $branch = null,
        public ?InventoryInPurchaseOrderLineDto $inventory = null,
        public ?string $lineType = null,
        public ?WarehouseInPurchaseOrderLineDto $warehouse = null,
        public ?string $lineDescription = null,
        public ?string $uom = null,
        public int|float|null $orderQty = null,
        public int|float|null $baseOrderQty = null,
        public int|float|null $qtyOnReceipts = null,
        public int|float|null $unitCost = null,
        public int|float|null $unitCostInBaseCurrency = null,
        public int|float|null $extCost = null,
        public int|float|null $discountPercent = null,
        public int|float|null $discountAmount = null,
        public ?bool $manualDiscount = null,
        public ?DiscountCodeInPurchaseOrderLineDto $discountCode = null,
        public int|float|null $amount = null,
        public int|float|null $receivedAmt = null,
        public ?string $alternateId = null,
        public int|float|null $minReceipt = null,
        public int|float|null $maxReceipt = null,
        public int|float|null $completeOn = null,
        public ?string $receiptAction = null,
        public ?TaxCategoryInPurchaseOrderLineDto $taxCategory = null,
        public ?AccountInPurchaseOrderLineDto $account = null,
        public ?SubInPurchaseOrderLineDto $sub = null,
        public ?ProjectInPurchaseOrderLineDto $project = null,
        public ?ProjectTaskInPurchaseOrderLineDto $projectTask = null,
        public ?\Carbon\Carbon $requested = null,
        public ?\Carbon\Carbon $promised = null,
        public ?bool $completed = null,
        public ?bool $canceled = null,
        public ?string $orderType = null,
        public ?string $orderNumber = null,
        public ?string $note = null,
        public ?string $customStr1 = null,
        public ?string $customStr2 = null,
        public ?string $customStr3 = null,
        public ?string $customStr4 = null,
        public ?string $customStr5 = null,
        public int|float|null $customDec1 = null,
        public int|float|null $customDec2 = null,
        public ?int $customInt1 = null,
        public ?int $customInt2 = null,
        #[MapName('customDateTimeUTC1')]
        public ?\Carbon\Carbon $customDateTimeUtc1 = null,
    ) {}
}
