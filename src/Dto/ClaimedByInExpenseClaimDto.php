<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part &gt; Claimed by &gt; The employee who is claiming the expenses. If the
 * claim is released, an Accounts Payable bill will be generated to this employee.
 *
 * @method static \Pionect\VismaSdk\Factories\ClaimedByInExpenseClaimDtoFactory testFactory()
 */
class ClaimedByInExpenseClaimDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $internalId = null,
        /** The identifier of the particular destination of the selected type. */
        public ?string $number = null,
        /** The name of the particular destination of the selected type. */
        public ?string $name = null,
    ) {}
}
