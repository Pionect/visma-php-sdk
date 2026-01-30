<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Ledger &gt; The ledger used for the batch.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LedgerInGeneralLedgerTransactionDetailsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LedgerInGeneralLedgerTransactionDetailsDtoFactory testFactory()
 */
class LedgerInGeneralLedgerTransactionDetailsDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
