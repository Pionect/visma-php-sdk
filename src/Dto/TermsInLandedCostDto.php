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
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\TermsInLandedCostDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
