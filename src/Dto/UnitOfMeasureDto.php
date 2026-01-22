<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class UnitOfMeasureDto extends Model
{
    /** Mandatory field: The table &gt; From unit* &gt; The unit to be converted. */
    #[Property]
    public ?string $fromUnit;

    /** Mandatory field: The table &gt; To unit* &gt; The unit to which the unit specified in the From unit will be converted with the use of the specified operation and specified conversion factor. */
    #[Property]
    public ?string $toUnit;

    /** The table &gt; Multiply/divide &gt; The operation to be performed for conversion of the From unit to the To unit. */
    #[Property]
    public ?string $unitMultDiv;

    /** The table &gt; Conversion factor &gt; The factor to be used for the unit conversion with the specified operation. */
    #[Property]
    public ?float $unitRate;

    /** The table &gt; Supplementary measure unit &gt; The supplementary measure unit to which the conversion will be made for Intrastat. */
    #[Property]
    public ?string $supplementaryMeasureUnit;
}
