<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a General Ledger Balance in GeneralLedgerBalanceController. Used by getting
 * data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\GeneralLedgerBalanceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\GeneralLedgerBalanceDtoFactory factory()
 */
class GeneralLedgerBalanceDto extends Model
{
    public function __construct(
        public ?BranchNumberDto $branch = null,
        public ?LedgerDescriptionDto $ledger = null,
        public ?string $balanceType = null,
        public ?string $financialPeriod = null,
        public ?AccountNumberDescriptionDto $account = null,
        public ?string $subaccountId = null,
        public ?string $subAccountCd = null,
        public ?string $currencyId = null,
        public int|float|null $periodToDateDebit = null,
        public int|float|null $periodToDateCredit = null,
        public int|float|null $beginningBalance = null,
        public int|float|null $yearToDateBalance = null,
        public int|float|null $periodToDateDebitInCurrency = null,
        public int|float|null $periodToDateCreditInCurrency = null,
        public int|float|null $beginningBalanceInCurrency = null,
        public int|float|null $yearToDateBalanceInCurrency = null,
        public ?bool $yearClosed = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $errorInfo = null,
    ) {}
}
