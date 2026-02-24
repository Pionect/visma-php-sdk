<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Ledger &gt; The ledger used for the batch.
 *
 * @method static \Pionect\VismaSdk\Factories\LedgerInGeneralLedgerTransactionDetailsDtoFactory testFactory()
 */
class LedgerInGeneralLedgerTransactionDetailsDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\LedgerInGeneralLedgerTransactionDetailsDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
