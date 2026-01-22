<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The task associated with the contract or project.
 */
class ProjectTaskInExpenseClaimDetailUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
