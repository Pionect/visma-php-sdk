<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Location &gt; The company location associated with the claim.
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInExpenseClaimDtoFactory testFactory()
 */
class LocationInExpenseClaimDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
