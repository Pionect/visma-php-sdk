<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Landed costs tab &gt; VAT category &gt; VAT category associated with supplier's VAT zone.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TaxCategoryInLandedCostDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TaxCategoryInLandedCostDtoFactory testFactory()
 */
class TaxCategoryInLandedCostDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
