<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
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
    /** The date */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $date;

    /** The property value */
    #[Property]
    public ?float $propertyValue;

    /** The minimum value percentage */
    #[Property]
    public ?float $minPercent;
}
