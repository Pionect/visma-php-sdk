<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The ledgers tab &gt; The ledger column and the Description column.
 */
class LedgerInBranchDto extends Model
{
    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
