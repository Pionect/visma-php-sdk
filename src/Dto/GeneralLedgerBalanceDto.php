<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a General Ledger Balance in GeneralLedgerBalanceController. Used by getting
 * data.
 */
class GeneralLedgerBalanceDto extends Model
{
    #[Property]
    public ?BranchNumberDto $branch;

    #[Property]
    public ?LedgerDescriptionDto $ledger;

    #[Property]
    public ?string $balanceType;

    /** The financial period to which the transactions recorded in the document should be posted. Format YYYYMM. */
    #[Property]
    public ?string $financialPeriod;

    #[Property]
    public ?AccountNumberDescriptionDto $account;

    #[Property]
    public ?string $subaccountId;

    #[Property]
    public ?string $subAccountCd;

    #[Property]
    public ?string $currencyId;

    /** The total of all debit movements for the selected period. */
    #[Property]
    public ?float $periodToDateDebit;

    /** The total of all credit movements for the selected period. */
    #[Property]
    public ?float $periodToDateCredit;

    /** The total account balance at the start of the selected period. */
    #[Property]
    public ?float $beginningBalance;

    /** The total account balance at the end of the selected period. */
    #[Property]
    public ?float $yearToDateBalance;

    /** The total of all debit movements in the currency of the selected account for the selected period. */
    #[Property]
    public ?float $periodToDateDebitInCurrency;

    /** The total of all credit movements in the currency of the selected account for the selected period. */
    #[Property]
    public ?float $periodToDateCreditInCurrency;

    /** The total account balance in the currency of the selected account at the start of the selected period. */
    #[Property]
    public ?float $beginningBalanceInCurrency;

    /** The total account balance in the currency of the selected account at the end of the selected period. */
    #[Property]
    public ?float $yearToDateBalanceInCurrency;

    /** True when the last period of a financial year is  closed in all modules. */
    #[Property]
    public ?bool $yearClosed;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?string $errorInfo;
}
