<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Consol. branch &gt;  The consolidation branch, which you create when a company has
 * multiple branches that operate within a single legal entity and post transactions to the same
 * ledger.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ConsolBranchInLedgerDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ConsolBranchInLedgerDtoFactory factory()
 */
class ConsolBranchInLedgerDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
