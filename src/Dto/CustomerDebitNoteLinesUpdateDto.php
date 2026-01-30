<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerDebitNoteLinesUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerDebitNoteLinesUpdateDtoFactory factory()
 */
class CustomerDebitNoteLinesUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $discountCode = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $domesticServicesDeductible = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $itemType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $typeOfWork = null,
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $inventoryNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $lineNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $quantity = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $unitPriceInCurrency = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $manualAmountInCurrency = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $accountNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $vatCodeId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $uom = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $discountPercent = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $discountAmountInCurrency = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $manualDiscount = null,
        public ?array $subaccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $salesperson = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $deferralSchedule = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $deferralCode = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $termStartDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\Carbon\Carbon $termEndDate = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $note = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $branchNumber = null,
    ) {}
}
