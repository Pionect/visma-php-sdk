<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Purchase Receipt Line in PurchaseReceiptBasicContraoller. Used for adding
 * data.
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptLineBasicUpdateDtoFactory testFactory()
 */
class PurchaseReceiptLineBasicUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $lineNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $lineType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branchId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branchNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $inventoryId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $warehouseId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $locationId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $transactionDescription = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $uom = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $receiptQty = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $unitCost = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $extCost = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $discountPercent = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $discountAmount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $manualDiscount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $discountCodeId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $amount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $taxCategoryId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $accountId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $accountDescription = null,
        public ?array $subaccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $actualAccountId = null,
        public ?array $actualSubaccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $projectId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $projectTaskId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $expirationDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $lotSerialNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $poOrderType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $poOrderNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $poOrderLineNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $transferOrderType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $transferOrderNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $transferOrderLineNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $completePoLine = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customStr1 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customStr2 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customStr3 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customStr4 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customStr5 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $customDec1 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $customDec2 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $customInt1 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $customInt2 = null,
        #[MapName('customDateTimeUTC1'), WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $customDateTimeUtc1 = null,
    ) {}
}
