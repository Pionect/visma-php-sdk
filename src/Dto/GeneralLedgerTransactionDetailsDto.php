<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class GeneralLedgerTransactionDetailsDto extends Model
{
    #[Property]
    public ?int $lineNumber;

    /** Workspace &gt; The workspace where the transaction originated. */
    #[Property]
    public ?string $module;

    /** Batch number &gt; The reference number of the batch (generated for the transaction) that updated the balance of the selected account. */
    #[Property]
    public ?string $batchNumber;

    /** Trans date &gt; The date of the transaction. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $tranDate;

    /** Period &gt; The financial period of the transaction. */
    #[Property]
    public ?string $period;

    /** Description &gt; The user-defined description of the transaction. */
    #[Property]
    public ?string $description;

    /** Ref. number &gt; The reference number of the external document on which this transaction is based. */
    #[Property]
    public ?string $refNumber;

    #[Property]
    public ?\branchInGeneralLedgerTransactionDetailsDto $branch;

    #[Property]
    public ?\accountInGeneralLedgerTransactionDetailsDto $account;

    #[Property]
    public ?\ledgerInGeneralLedgerTransactionDetailsDto $ledger;

    /** Subaccount &gt; The subaccount used in the batch. */
    #[Property]
    public ?string $subaccount;

    /** Beg. balance &gt; The running total of the account's beginning balance calculated in the order of transactions displayed in the table. */
    #[Property]
    public ?float $begBalance;

    /** Debit amount &gt; The transaction debit amount charged to the account during the selected financial period. */
    #[Property]
    public ?float $debitAmount;

    /** Credit amount &gt; The transaction credit amount charged to the account during the selected financial period. */
    #[Property]
    public ?float $creditAmount;

    /** Ending balance &gt; The running total of the account's ending balance calculated in the order of transactions displayed in the table. */
    #[Property]
    public ?float $endingBalance;

    /**
     * Click the Show currency details check box to view the below fields in the window.
     * Currency &gt; The currency of transactions in the account. If it is not specified, the balance is in the base currency.
     */
    #[Property]
    public ?string $currency;

    /** Beg. balance (currency) &gt; The account balance in the selected currency at the start of the selected period. */
    #[Property]
    public ?float $currBegBalance;

    /** Debit amount (currency) &gt; The debit amount in the selected currency for the specified account over the selected period. */
    #[Property]
    public ?float $currDebitAmount;

    /** Credit amount (currency) &gt; The credit amount in the selected currency for the specified account over the selected period. */
    #[Property]
    public ?float $currCreditAmount;

    /** Ending balance (currency) &gt; The account balance in the selected currency at the start of the selected period. */
    #[Property]
    public ?float $currEndingBalance;

    /** System generated information reflecting when the last change was done. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?string $errorInfo;

    #[Property]
    public ?\MetadataDto $metadata;
}
