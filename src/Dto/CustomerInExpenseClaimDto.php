<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Customer &gt; The applicable customer.
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInExpenseClaimDtoFactory testFactory()
 */
class CustomerInExpenseClaimDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
