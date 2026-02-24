<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Customer &gt; The identifier of the customer associated with the expense.
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInExpenseClaimDetailDtoFactory testFactory()
 */
class CustomerInExpenseClaimDetailDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CustomerInExpenseClaimDetailDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        /** Click the magnifier. > The name. */
        public ?string $name = null,
    ) {}
}
