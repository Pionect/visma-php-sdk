<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CustomerDebitNoteLineDtoFactory testFactory()
 */
class CustomerDebitNoteLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?\Carbon\Carbon $termStartDate = null,
        public ?\Carbon\Carbon $termEndDate = null,
        public ?bool $isRotRutDeductible = null,
        public ?string $itemType = null,
        public ?WorkTypeDto $typeOfWork = null,
        public int|float|null $deductableAmount = null,
        /** @var AttachmentDto[]|null */
        public ?array $attachments = null,
        public ?string $soShipmentNbr = null,
        public ?string $soOrderType = null,
        public ?string $soOrderNbr = null,
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
        public ?AccountInCustomerDebitNoteLineDto $account = null,
        public ?VatCodeInCustomerDebitNoteLineDto $vatCode = null,
        public ?string $uom = null,
        public int|float|null $discountPercent = null,
        public int|float|null $discountAmount = null,
        public int|float|null $discountAmountInCurrency = null,
        public ?bool $manualDiscount = null,
        public ?SubaccountInCustomerDebitNoteLineDto $subaccount = null,
        public ?string $salesperson = null,
        public ?SellerInCustomerDebitNoteLineDto $seller = null,
        public ?int $deferralSchedule = null,
        public ?string $deferralCode = null,
        public ?string $discountCode = null,
        public ?string $note = null,
        public ?BranchNumberInCustomerDebitNoteLineDto $branchNumber = null,
        public ?string $externalLink = null,
    ) {}
}
