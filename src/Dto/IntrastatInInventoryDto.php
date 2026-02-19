<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * General information tab &gt; Intrastat section
 *
 * @method static \Pionect\VismaSdk\Factories\IntrastatInInventoryDtoFactory testFactory()
 */
class IntrastatInInventoryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Represents the 8 digit level Combine Nomenclature commodity code specific for
         * the year
         * for which the creating / actualizations Intrastat declarations is drafted.
         */
        public ?string $cN8 = null,
        /**
         * The country of origin of the commodity will be selected,
         * that country where the good has been produced or had the last substantial
         * transformation.
         */
        public ?string $countryOfOrigin = null,
        /**
         * The requirement for Supplementary Measure Units applies only to certain
         * classes of goods(NC8 Positions)
         * that may be expressed from quantitative point of view in other measurement
         * units but kilo also.
         */
        public ?string $supplementaryMeasureUnit = null,
    ) {}
}
