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
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
