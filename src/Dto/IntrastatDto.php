<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Intrastat part of InventoryItem in InventoryItemController. Used for getting
 * data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\IntrastatDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\IntrastatDtoFactory factory()
 */
class IntrastatDto extends Model
{
    /**
     * Represents the 8 digit level Combine Nomenclature commodity code specific for the year
     * for which the creating / actualizations Intrastat declarations is drafted.
     */
    #[Property]
    public ?string $cN8;

    /**
     * The country of origin of the commodity will be selected,
     * that country where the good has been produced or had the last substantial transformation.
     */
    #[Property]
    public ?string $countryOfOrigin;

    /**
     * The requirement for Supplementary Measure Units applies only to certain classes of goods(NC8 Positions)
     * that may be expressed from quantitative point of view in other measurement units but kilo also.
     */
    #[Property]
    public ?string $supplementaryMeasureUnit;
}
