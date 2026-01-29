<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The task associated with the contract or project.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectTaskInExpenseClaimDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTaskInExpenseClaimDetailUpdateDtoFactory factory()
 */
class ProjectTaskInExpenseClaimDetailUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
