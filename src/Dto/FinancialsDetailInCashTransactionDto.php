<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\EntryTypeTaxCalculationModeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * Financial details tab &gt;
 *
 * @method static \Pionect\VismaSdk\Factories\FinancialsDetailInCashTransactionDtoFactory testFactory()
 */
class FinancialsDetailInCashTransactionDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\FinancialsDetailInCashTransactionDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Link to general ledger section > Batch number > The number of the batch
         * generated to implement the cash transaction.
         */
        public ?string $batchNumber = null,
        public ?BranchInFinancialsDetailDto $branch = null,
        /**
         * Link to general ledger section > Cleared > A check box that indicates (if
         * selected) that the transaction was cleared.
         */
        public ?bool $cleared = null,
        /**
         * Link to general ledger section > Clear date > 	The date when the transaction
         * was cleared.
         */
        public ?\Carbon\Carbon $clearDate = null,
        public ?TaxZoneInFinancialsDetailDto $taxZone = null,
        /**
         * VAT settings section > VAT calculation > The VAT calculation mode, which
         * defines which amounts (VAT-inclusive or VAT-exclusive) should be entered in
         * the detail lines of a document.
         */
        public ?EntryTypeTaxCalculationModeEnum $taxCalcMode = null,
    ) {}
}
