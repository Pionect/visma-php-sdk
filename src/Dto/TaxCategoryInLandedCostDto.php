<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Landed costs tab &gt; VAT category &gt; VAT category associated with supplier's VAT zone.
 *
 * @method static \Pionect\VismaSdk\Factories\TaxCategoryInLandedCostDtoFactory testFactory()
 */
class TaxCategoryInLandedCostDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
