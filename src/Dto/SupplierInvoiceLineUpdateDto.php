<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierInvoiceLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInvoiceLineUpdateDtoFactory testFactory()
 */
class SupplierInvoiceLineUpdateDto extends Model
{
    public function __construct(
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $lineNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $inventoryNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $transactionDescription = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $quantity = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $uom = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $unitCostInCurrency = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $costInCurrency = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $discountPercent = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $discountAmountInCurrency = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $discountUnitCostInCurrency = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $manualDiscount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $accountNumber = null,
        public ?array $subaccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $deferralSchedule = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $deferralCode = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $vatCodeId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branch = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branchNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $note = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $projectId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $projectInternalId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $projectTaskId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $projectTaskInternalId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $splitLine = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $undoSplitLine = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $splitHierarchy = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $retainagePct = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $curyRetainageAmt = null,
        public ?LinkLineDto $linkLine = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $termStartDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $termEndDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $externalInventoryId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $prebookAccountNumber = null,
        public ?array $prebookSubaccount = null,
    ) {}
}
