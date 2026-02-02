<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The ledgers tab &gt; The ledger column and the Description column.
 *
 * @method static \Pionect\VismaSdk\Factories\LedgerInBranchDtoFactory testFactory()
 */
class LedgerInBranchDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
