<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Department ID &gt; The department associated with the expense
 * claim.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DepartmentInExpenseClaimDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DepartmentInExpenseClaimDtoFactory testFactory()
 */
class DepartmentInExpenseClaimDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
