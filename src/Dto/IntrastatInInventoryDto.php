<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General information tab &gt; Intrastat section
 */
class IntrastatInInventoryDto extends Model
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
