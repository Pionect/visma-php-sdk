<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * This class represents a Purchase Order in PurchaseOrderController. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseOrderBasicDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseOrderBasicDtoFactory testFactory()
 */
class PurchaseOrderBasicDto extends Model
{
    public function __construct(
        public ?string $orderType = null,
        public ?string $orderNbr = null,
        public ?bool $hold = null,
        public ?string $status = null,
        public ?\Carbon\Carbon $date = null,
        public ?\Carbon\Carbon $promisedOn = null,
        public ?string $description = null,
        public ?SupplierInPurchaseOrderBasicDto $supplier = null,
        public ?LocationInPurchaseOrderBasicDto $location = null,
        public ?OwnerInPurchaseOrderBasicDto $owner = null,
        public ?string $currency = null,
        public ?string $supplierRef = null,
        public int|float|null $exchangeRate = null,
        public int|float|null $lineTotal = null,
        public int|float|null $lineTotalInBaseCurrency = null,
        public int|float|null $vatExemptTotal = null,
        public int|float|null $vatExemptTotalInBaseCurrency = null,
        public int|float|null $taxTotal = null,
        public int|float|null $taxTotalInBaseCurrency = null,
        public int|float|null $orderTotal = null,
        public int|float|null $orderTotalInBaseCurrency = null,
        public int|float|null $controlTotal = null,
        public int|float|null $controlTotalInBaseCurrency = null,
        public ?BranchInPurchaseOrderBasicDto $branch = null,
        public ?array $lines = null,
        public ?array $taxDetails = null,
        public ?array $purchaseReceipts = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
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
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
