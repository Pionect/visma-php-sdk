<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Location &gt; The identifier of the customer location associated with the expense.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInExpenseClaimDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInExpenseClaimDetailDtoFactory factory()
 */
class LocationInExpenseClaimDetailDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
