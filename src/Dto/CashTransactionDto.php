<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CashTransactionDtoFactory testFactory()
 */
class CashTransactionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $tranType = null,
        public ?string $referenceNbr = null,
        public ?string $status = null,
        public ?bool $hold = null,
        public ?\Carbon\Carbon $tranDate = null,
        public ?string $finPeriod = null,
        public ?string $financialPeriod = null,
        public ?CashAccountInCashTransactionDto $cashAccount = null,
        public ?string $currency = null,
        public ?EntryTypeInCashTransactionDto $entryType = null,
        public ?string $disbReceipt = null,
        public ?string $documentRef = null,
        public ?OwnerInCashTransactionDto $owner = null,
        public ?string $description = null,
        public int|float|null $amount = null,
        public int|float|null $vatTaxableTotal = null,
        public int|float|null $vatExemptTotal = null,
        public int|float|null $taxTotal = null,
        public int|float|null $controlTotal = null,
        public int|float|null $taxAmount = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?array $transactionDetails = null,
        public ?array $taxDetails = null,
        public ?FinancialsDetailInCashTransactionDto $financialsDetail = null,
        public ?string $timeStamp = null,
    ) {}
}
