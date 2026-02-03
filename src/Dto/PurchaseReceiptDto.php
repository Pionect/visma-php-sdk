<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Purchase Receipt in PurchaseReceiptController. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptDtoFactory testFactory()
 */
class PurchaseReceiptDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** @var LandedCostDto[]|null */
        public ?array $landedCost = null,
        public ?string $note = null,
        public ?string $timeStamp = null,
        public ?string $receiptType = null,
        public ?string $receiptNbr = null,
        public ?bool $hold = null,
        public ?string $status = null,
        public ?\Carbon\Carbon $date = null,
        public ?string $postPeriod = null,
        public ?WarehouseInPurchaseReceiptDto $warehouse = null,
        public ?SupplierInPurchaseReceiptDto $supplier = null,
        public ?LocationInPurchaseReceiptDto $location = null,
        public ?string $currency = null,
        public int|float|null $exchangeRate = null,
        public ?bool $createBill = null,
        public ?string $supplierRef = null,
        public int|float|null $totalQty = null,
        public int|float|null $controlQty = null,
        public int|float|null $vatExemptTotal = null,
        public int|float|null $vatTaxableTotal = null,
        public int|float|null $totalAmt = null,
        public int|float|null $controlTotal = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?BranchNumberInPurchaseReceiptDto $branchNumber = null,
        /** @var PurchaseReceiptLineDto[]|null */
        public ?array $lines = null,
        public ?\Carbon\Carbon $dueDate = null,
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
        public ?string $errorInfo = null,
    ) {}
}
