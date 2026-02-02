<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Top part &gt; Branch &gt; Click the magnifier
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInBudgetDtoFactory testFactory()
 */
class BranchNumberInBudgetDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
