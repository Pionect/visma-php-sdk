<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Currency info for branch.
 */
class BranchCurrencyDto extends Model
{
    /** Currency Id. */
    #[Property]
    public ?string $id;

    /** Currency description. */
    #[Property]
    public ?string $description;

    /** Currency symbol. */
    #[Property]
    public ?string $symbol;
}
