<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\GeneralLedgerPeriodBalanceQueryParametersBalanceTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\LedgerDtoFactory testFactory()
 */
class LedgerDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        /**
         * Mandatory field: The top part > Ledger ID* > An alphanumeric string of up to
         * 10 characters used to identify the ledger.
         */
        public ?string $number = null,
        /** The top part > Description > A detailed ledger description. */
        public ?string $description = null,
        /**
         * The top part > Balance type > The type of balance in the ledger. Select one
         * of the following predefined types: Actual, Budget, Reporting, Statistical.
         */
        public ?GeneralLedgerPeriodBalanceQueryParametersBalanceTypeEnum $balanceType = null,
        /**
         * Mandatory field: The top part > Currency* > The default currency of the
         * ledger.
         */
        public ?string $currencyId = null,
        /**
         * The top part > Consolidation source > A check box that specifies, if
         * selected, that the ledger should be used as a source ledger for
         * consolidation.
         */
        public ?bool $consolidationSource = null,
        public ?ConsolBranchInLedgerDto $consolBranch = null,
        /**
         * The top part > Branch accounting > A check box that you select to indicate
         * that the system should automatically generate inter-branch transactions for
         * this ledger to balance transactions for all branches involved.
         */
        public ?bool $branchAccounting = null,
        /** System generated information. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /** Branch accounting > True/False */
        public ?bool $postInterCompany = null,
    ) {}
}
