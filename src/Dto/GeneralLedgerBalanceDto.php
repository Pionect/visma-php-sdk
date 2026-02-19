<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\GeneralLedgerPeriodBalanceQueryParametersBalanceTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a General Ledger Balance in GeneralLedgerBalanceController. Used by getting
 * data.
 *
 * @method static \Pionect\VismaSdk\Factories\GeneralLedgerBalanceDtoFactory testFactory()
 */
class GeneralLedgerBalanceDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?BranchNumberDto $branch = null,
        public ?LedgerDescriptionDto $ledger = null,
        public ?GeneralLedgerPeriodBalanceQueryParametersBalanceTypeEnum $balanceType = null,
        /**
         * The financial period to which the transactions recorded in the document
         * should be posted. Format YYYYMM.
         */
        public ?string $financialPeriod = null,
        public ?AccountNumberDescriptionDto $account = null,
        public ?string $subaccountId = null,
        public ?string $subAccountCd = null,
        public ?string $currencyId = null,
        /** The total of all debit movements for the selected period. */
        public int|float|null $periodToDateDebit = null,
        /** The total of all credit movements for the selected period. */
        public int|float|null $periodToDateCredit = null,
        /** The total account balance at the start of the selected period. */
        public int|float|null $beginningBalance = null,
        /** The total account balance at the end of the selected period. */
        public int|float|null $yearToDateBalance = null,
        /**
         * The total of all debit movements in the currency of the selected account for
         * the selected period.
         */
        public int|float|null $periodToDateDebitInCurrency = null,
        /**
         * The total of all credit movements in the currency of the selected account for
         * the selected period.
         */
        public int|float|null $periodToDateCreditInCurrency = null,
        /**
         * The total account balance in the currency of the selected account at the
         * start of the selected period.
         */
        public int|float|null $beginningBalanceInCurrency = null,
        /**
         * The total account balance in the currency of the selected account at the end
         * of the selected period.
         */
        public int|float|null $yearToDateBalanceInCurrency = null,
        /** True when the last period of a financial year is  closed in all modules. */
        public ?bool $yearClosed = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $errorInfo = null,
    ) {}
}
