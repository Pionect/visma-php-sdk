<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Purchase Order Line in PurchaseReceiptContraoller. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptLineDtoFactory testFactory()
 */
class PurchaseReceiptLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?array $allocations = null,
        public ?string $note = null,
        public int|float|null $baseReceiptQty = null,
        public ?int $lineNbr = null,
        public ?BranchInPurchaseReceiptLineDto $branch = null,
        public ?BranchNumberInPurchaseReceiptLineDto $branchNumber = null,
        public ?InventoryNumberDescriptionDto $inventory = null,
        public ?string $lineType = null,
        public ?WarehouseInPurchaseReceiptLineDto $warehouse = null,
        public ?LocationInPurchaseReceiptLineDto $location = null,
        public ?string $transactionDescription = null,
        public ?string $uom = null,
        public int|float|null $orderQty = null,
        public int|float|null $openQty = null,
        public int|float|null $receiptQty = null,
        public int|float|null $unitCost = null,
        public int|float|null $extCost = null,
        public int|float|null $discountPercent = null,
        public int|float|null $discountAmount = null,
        public ?bool $manualDiscount = null,
        public ?DiscountCodeInPurchaseReceiptLineDto $discountCode = null,
        public int|float|null $amount = null,
        public ?TaxCategoryInPurchaseReceiptLineDto $taxCategory = null,
        public ?AccountInPurchaseReceiptLineDto $account = null,
        public ?string $accountDescription = null,
        public ?SubInPurchaseReceiptLineDto $sub = null,
        public ?ActualAccountInPurchaseReceiptLineDto $actualAccount = null,
        public ?ActualSubInPurchaseReceiptLineDto $actualSub = null,
        public ?ProjectInPurchaseReceiptLineDto $project = null,
        public ?ProjectTaskInPurchaseReceiptLineDto $projectTask = null,
        public ?\Carbon\Carbon $expirationDate = null,
        public ?string $lotSerialNumber = null,
        public ?string $poOrderType = null,
        public ?string $poOrderNbr = null,
        public ?int $poOrderLineNbr = null,
        public ?string $transferOrderType = null,
        public ?string $transferOrderNbr = null,
        public ?int $transferOrderLineNbr = null,
        public ?bool $completePoLine = null,
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
