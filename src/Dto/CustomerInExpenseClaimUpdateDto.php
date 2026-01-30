<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The applicable customer.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerInExpenseClaimUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInExpenseClaimUpdateDtoFactory factory()
 */
class CustomerInExpenseClaimUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
