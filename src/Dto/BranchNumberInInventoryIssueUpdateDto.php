<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Branch associated
 */
class BranchNumberInInventoryIssueUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
