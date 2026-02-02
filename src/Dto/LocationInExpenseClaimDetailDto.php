<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Location &gt; The identifier of the customer location associated with the expense.
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInExpenseClaimDetailDtoFactory testFactory()
 */
class LocationInExpenseClaimDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
