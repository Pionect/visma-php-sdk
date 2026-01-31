<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represent a Purchase Order Line in Purchase Order Controller. Used to pass data to server
 * for creating or updating an order line
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseOrderLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseOrderLineUpdateDtoFactory testFactory()
 */
class PurchaseOrderLineUpdateDto extends Model
{
    public function __construct(
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $lineNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branch = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $inventory = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $lineType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $warehouse = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $lineDescription = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $uom = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $orderQty = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $unitCost = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $extCost = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $discountAmount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $discountPercent = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $manualDiscount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $discountCode = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $amount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $alternateId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $minReceipt = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $maxReceipt = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $completeOn = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $receiptAction = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $taxCategory = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $account = null,
        public ?array $sub = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $project = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $projectTask = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $requested = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $promised = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $note = null,
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
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $completed = null,
    ) {}
}
