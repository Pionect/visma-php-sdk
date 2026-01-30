<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The employee who is claiming the expenses. If the claim is released, an Accounts Payable bill will
 * be generated to this employee.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ClaimedByInExpenseClaimUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ClaimedByInExpenseClaimUpdateDtoFactory testFactory()
 */
class ClaimedByInExpenseClaimUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
