<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\GeneralLedgerTransactionDetailsDtoFactory testFactory()
 */
class GeneralLedgerTransactionDetailsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $lineNumber = null,
        public ?string $module = null,
        public ?string $batchNumber = null,
        public ?\Carbon\Carbon $tranDate = null,
        public ?string $period = null,
        public ?string $description = null,
        public ?string $refNumber = null,
        public ?BranchInGeneralLedgerTransactionDetailsDto $branch = null,
        public ?AccountInGeneralLedgerTransactionDetailsDto $account = null,
        public ?LedgerInGeneralLedgerTransactionDetailsDto $ledger = null,
        public ?string $subaccount = null,
        public int|float|null $begBalance = null,
        public int|float|null $debitAmount = null,
        public int|float|null $creditAmount = null,
        public int|float|null $endingBalance = null,
        public ?string $currency = null,
        public int|float|null $currBegBalance = null,
        public int|float|null $currDebitAmount = null,
        public int|float|null $currCreditAmount = null,
        public int|float|null $currEndingBalance = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $errorInfo = null,
    ) {}
}
