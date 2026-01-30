<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The company location associated with the claim.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInExpenseClaimUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInExpenseClaimUpdateDtoFactory testFactory()
 */
class LocationInExpenseClaimUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
