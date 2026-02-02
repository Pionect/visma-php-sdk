<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CreditNoteLineDtoFactory testFactory()
 */
class CreditNoteLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?array $attachments = null,
        public ?ProjectTaskIdDescriptionDto $projectTask = null,
        public ?int $lineNumber = null,
        public ?string $inventoryNumber = null,
        public ?string $description = null,
        public int|float|null $quantity = null,
        public int|float|null $unitPrice = null,
        public int|float|null $unitPriceInCurrency = null,
        public int|float|null $manualAmount = null,
        public int|float|null $manualAmountInCurrency = null,
        public int|float|null $amount = null,
        public int|float|null $cost = null,
        public int|float|null $amountInCurrency = null,
        public ?AccountInCreditNoteLineDto $account = null,
        public ?VatCodeInCreditNoteLineDto $vatCode = null,
        public ?string $uom = null,
        public int|float|null $discountPercent = null,
        public int|float|null $discountAmount = null,
        public int|float|null $discountAmountInCurrency = null,
        public ?bool $manualDiscount = null,
        public ?SubaccountInCreditNoteLineDto $subaccount = null,
        public ?string $salesperson = null,
        public ?SellerInCreditNoteLineDto $seller = null,
        public ?int $deferralSchedule = null,
        public ?string $deferralCode = null,
        public ?string $discountCode = null,
        public ?string $note = null,
        public ?BranchNumberInCreditNoteLineDto $branchNumber = null,
        public ?string $externalLink = null,
    ) {}
}
