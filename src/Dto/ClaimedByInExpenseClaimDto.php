<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
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
    #[Property]
    public ?string $internalId;

    /** The identifier of the particular destination of the selected type. */
    #[Property]
    public ?string $number;

    /** The name of the particular destination of the selected type. */
    #[Property]
    public ?string $name;
}
