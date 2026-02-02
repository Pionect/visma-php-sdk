<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Consol. branch &gt;  The consolidation branch, which you create when a company has
 * multiple branches that operate within a single legal entity and post transactions to the same
 * ledger.
 *
 * @method static \Pionect\VismaSdk\Factories\ConsolBranchInLedgerDtoFactory testFactory()
 */
class ConsolBranchInLedgerDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
