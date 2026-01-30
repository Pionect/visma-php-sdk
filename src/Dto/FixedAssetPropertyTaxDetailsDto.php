<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents an attribute in FixedAssetPropertyTaxGroup. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FixedAssetPropertyTaxDetailsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FixedAssetPropertyTaxDetailsDtoFactory factory()
 */
class FixedAssetPropertyTaxDetailsDto extends Model
{
    public function __construct(
        public ?\Carbon\Carbon $date = null,
        public int|float|null $propertyValue = null,
        public int|float|null $minPercent = null,
    ) {}
}
