<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represents a Purchase Receipt in PurchaseReceiptBasicController. Used for adding data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseReceiptBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptBasicUpdateDtoFactory factory()
 */
class PurchaseReceiptBasicUpdateDto extends Model
{
    public function __construct(
        public ?array $lines = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $receiptType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $receiptNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $hold = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $date = null,
        public ?PostPeriodInPurchaseReceiptBasicUpdateDto $postPeriod = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $warehouseId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $supplierId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $locationId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $currency = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $exchangeRate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $createBill = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $supplierRef = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $controlQty = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $controlAmount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branchNumber = null,
        public ?CustomStr1inPurchaseReceiptBasicUpdateDto $customStr1 = null,
        public ?CustomStr2inPurchaseReceiptBasicUpdateDto $customStr2 = null,
        public ?CustomStr3inPurchaseReceiptBasicUpdateDto $customStr3 = null,
        public ?CustomStr4inPurchaseReceiptBasicUpdateDto $customStr4 = null,
        public ?CustomStr5inPurchaseReceiptBasicUpdateDto $customStr5 = null,
        public ?CustomDec1inPurchaseReceiptBasicUpdateDto $customDec1 = null,
        public ?CustomDec2inPurchaseReceiptBasicUpdateDto $customDec2 = null,
        public ?CustomInt1inPurchaseReceiptBasicUpdateDto $customInt1 = null,
        public ?CustomInt2inPurchaseReceiptBasicUpdateDto $customInt2 = null,
        #[MapName('customDateTimeUTC1')]
        public ?CustomDateTimeUtc1inPurchaseReceiptBasicUpdateDto $customDateTimeUtc1 = null,
        public ?string $timeStamp = null,
    ) {}
}
