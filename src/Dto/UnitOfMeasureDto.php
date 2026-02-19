<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\CreateCurrencyRateMultDivEnum;
use Pionect\VismaSdk\Enums\UnitOfMeasureSupplementaryMeasureUnitEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\UnitOfMeasureDtoFactory testFactory()
 */
class UnitOfMeasureDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Mandatory field: The table > From unit* > The unit to be converted. */
        public ?string $fromUnit = null,
        /**
         * Mandatory field: The table > To unit* > The unit to which the unit specified
         * in the From unit will be converted with the use of the specified operation
         * and specified conversion factor.
         */
        public ?string $toUnit = null,
        /**
         * Multiply/divide > The operation to be performed for conversion of the From
         * unit to the To unit.
         */
        public ?CreateCurrencyRateMultDivEnum $unitMultDiv = null,
        /**
         * Conversion factor > The factor to be used for the unit conversion with the
         * specified operation.
         */
        public int|float|null $unitRate = null,
        /**
         * Supplementary measure unit > The supplementary measure unit to which the
         * conversion will be made for Intrastat.
         */
        public ?UnitOfMeasureSupplementaryMeasureUnitEnum $supplementaryMeasureUnit = null,
    ) {}
}
