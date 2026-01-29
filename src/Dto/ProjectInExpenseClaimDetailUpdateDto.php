<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The project or customer contract associated with the expense claim, if the work performed was for a
 * project or contract. Project Task The task associated with the contract or project.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectInExpenseClaimDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectInExpenseClaimDetailUpdateDtoFactory factory()
 */
class ProjectInExpenseClaimDetailUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
