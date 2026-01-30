<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represents a Purchase Receipt in PurchaseReceiptController. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseReceiptUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptUpdateDtoFactory factory()
 */
class PurchaseReceiptUpdateDto extends Model
{
    public function __construct(
        public ?array $lines = null,
        public ?array $landedCost = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $note = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $receiptType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $receiptNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $hold = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $date = null,
        public ?PostPeriodInPurchaseReceiptUpdateDto $postPeriod = null,
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
        public ?CustomStr1inPurchaseReceiptUpdateDto $customStr1 = null,
        public ?CustomStr2inPurchaseReceiptUpdateDto $customStr2 = null,
        public ?CustomStr3inPurchaseReceiptUpdateDto $customStr3 = null,
        public ?CustomStr4inPurchaseReceiptUpdateDto $customStr4 = null,
        public ?CustomStr5inPurchaseReceiptUpdateDto $customStr5 = null,
        public ?CustomDec1inPurchaseReceiptUpdateDto $customDec1 = null,
        public ?CustomDec2inPurchaseReceiptUpdateDto $customDec2 = null,
        public ?CustomInt1inPurchaseReceiptUpdateDto $customInt1 = null,
        public ?CustomInt2inPurchaseReceiptUpdateDto $customInt2 = null,
        #[MapName('customDateTimeUTC1')]
        public ?CustomDateTimeUtc1inPurchaseReceiptUpdateDto $customDateTimeUtc1 = null,
        public ?string $timeStamp = null,
    ) {}
}
