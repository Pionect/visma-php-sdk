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
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
