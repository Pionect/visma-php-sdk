<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents an attribute in FixedAssetPropertyTaxGroup. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\FixedAssetPropertyTaxDetailsDtoFactory testFactory()
 */
class FixedAssetPropertyTaxDetailsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?\Carbon\Carbon $date = null,
        public int|float|null $propertyValue = null,
        public int|float|null $minPercent = null,
    ) {}
}
