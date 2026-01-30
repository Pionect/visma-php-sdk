<?php

namespace Pionect\VismaSdk\Dto;

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
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
