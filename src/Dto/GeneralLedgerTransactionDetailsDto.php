<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\GeneralLedgerTransactionDetailsDtoFactory testFactory()
 */
class GeneralLedgerTransactionDetailsDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\GeneralLedgerTransactionDetailsDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $lineNumber = null,
        /** Workspace > The workspace where the transaction originated. */
        public ?string $module = null,
        /**
         * Batch number > The reference number of the batch (generated for the
         * transaction) that updated the balance of the selected account.
         */
        public ?string $batchNumber = null,
        /** Trans date > The date of the transaction. */
        public ?\Carbon\Carbon $tranDate = null,
        /** Period > The financial period of the transaction. */
        public ?string $period = null,
        /** Description > The user-defined description of the transaction. */
        public ?string $description = null,
        /**
         * Ref. number > The reference number of the external document on which this
         * transaction is based.
         */
        public ?string $refNumber = null,
        public ?BranchInGeneralLedgerTransactionDetailsDto $branch = null,
        public ?AccountInGeneralLedgerTransactionDetailsDto $account = null,
        public ?LedgerInGeneralLedgerTransactionDetailsDto $ledger = null,
        /** Subaccount > The subaccount used in the batch. */
        public ?string $subaccount = null,
        /**
         * Beg. balance > The running total of the account's beginning balance
         * calculated in the order of transactions displayed in the table.
         */
        public int|float|null $begBalance = null,
        /**
         * Debit amount > The transaction debit amount charged to the account during the
         * selected financial period.
         */
        public int|float|null $debitAmount = null,
        /**
         * Credit amount > The transaction credit amount charged to the account during
         * the selected financial period.
         */
        public int|float|null $creditAmount = null,
        /**
         * Ending balance > The running total of the account's ending balance calculated
         * in the order of transactions displayed in the table.
         */
        public int|float|null $endingBalance = null,
        /**
         * Click the Show currency details check box to view the below fields in the
         * window.
         * Currency > The currency of transactions in the account. If it is not
         * specified, the balance is in the base currency.
         */
        public ?string $currency = null,
        /**
         * Beg. balance (currency) > The account balance in the selected currency at the
         * start of the selected period.
         */
        public int|float|null $currBegBalance = null,
        /**
         * Debit amount (currency) > The debit amount in the selected currency for the
         * specified account over the selected period.
         */
        public int|float|null $currDebitAmount = null,
        /**
         * Credit amount (currency) > The credit amount in the selected currency for the
         * specified account over the selected period.
         */
        public int|float|null $currCreditAmount = null,
        /**
         * Ending balance (currency) > The account balance in the selected currency at
         * the start of the selected period.
         */
        public int|float|null $currEndingBalance = null,
        /** System generated information reflecting when the last change was done. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $errorInfo = null,
    ) {}
}
