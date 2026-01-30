<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Customer &gt; The applicable customer.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerInExpenseClaimDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInExpenseClaimDtoFactory factory()
 */
class CustomerInExpenseClaimDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
