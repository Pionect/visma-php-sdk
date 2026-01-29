<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Top part &gt; Branch &gt; Click the magnifier
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchNumberInBudgetDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInBudgetDtoFactory factory()
 */
class BranchNumberInBudgetDto extends Model
{
    /** Click the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $number;

    /** Click the magnifier. &gt; The name. */
    #[Property]
    public ?string $name;
}
