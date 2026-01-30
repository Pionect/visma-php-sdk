<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The ledgers tab &gt; The ledger column and the Description column.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LedgerInBranchDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LedgerInBranchDtoFactory factory()
 */
class LedgerInBranchDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
