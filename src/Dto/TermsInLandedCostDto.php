<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Landed costs tab &gt; Terms &gt; The credit terms used in relations with the landed cost supplier.
 *
 * @method static \Pionect\VismaSdk\Factories\TermsInLandedCostDtoFactory testFactory()
 */
class TermsInLandedCostDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
