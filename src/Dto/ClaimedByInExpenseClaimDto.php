<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Claimed by &gt; The employee who is claiming the expenses. If the
 * claim is released, an Accounts Payable bill will be generated to this employee.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ClaimedByInExpenseClaimDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ClaimedByInExpenseClaimDtoFactory factory()
 */
class ClaimedByInExpenseClaimDto extends Model
{
    public function __construct(
        public ?string $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
