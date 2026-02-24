<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Enums\PurchaseOrderLineLineTypeEnum;
use Pionect\VismaSdk\Enums\PurchaseOrderLineOrderTypeEnum;
use Pionect\VismaSdk\Enums\PurchaseReceiptLineTransferOrderTypeEnum;
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
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\PurchaseReceiptLineBasicUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?AttributeDetailUpdateOperationEnum $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $lineNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?PurchaseOrderLineLineTypeEnum $lineType = null,
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
        /**
         * @var SegmentUpdateDto[]|null
         *                              The Document details tab > The subaccount to be used to record the non-stock
         *                              item amount on the purchase receipt (for non-stock items for which receipts
         *                              are not required).
         */
        public ?array $subaccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $actualAccountId = null,
        /**
         * @var SegmentUpdateDto[]|null
         *                              The Document details tab > The subaccount used to record the item amount on
         *                              the purchase receipt, used for stock items and non-stock items for which a
         *                              receipt is required.
         */
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
        public ?PurchaseOrderLineOrderTypeEnum $poOrderType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $poOrderNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $poOrderLineNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?PurchaseReceiptLineTransferOrderTypeEnum $transferOrderType = null,
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
