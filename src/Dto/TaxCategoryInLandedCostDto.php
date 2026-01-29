<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Landed costs tab &gt; VAT category &gt; VAT category associated with supplier's VAT zone.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TaxCategoryInLandedCostDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TaxCategoryInLandedCostDtoFactory factory()
 */
class TaxCategoryInLandedCostDto extends Model
{
    /** Number of item */
    #[Property]
    public ?string $number;

    /** Name of item/description */
    #[Property]
    public ?string $description;
}
