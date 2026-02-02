<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part &gt; Department ID &gt; The department associated with the expense
 * claim.
 *
 * @method static \Pionect\VismaSdk\Factories\DepartmentInExpenseClaimDtoFactory testFactory()
 */
class DepartmentInExpenseClaimDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
