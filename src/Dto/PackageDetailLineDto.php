<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PackageDetailLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PackageDetailLineDtoFactory factory()
 */
class PackageDetailLineDto extends Model
{
    /** Packages tab &gt; Line number. The sequence of the lines. */
    #[Property]
    public ?int $lineNumber;

    /** Packages tab &gt; Confirmed &gt; This check box indicates (if selected) that shipping of the package specified on the line has been confirmed. */
    #[Property]
    public ?bool $confirmed;

    /** Mandatory field: Packages tab &gt; Box ID* &gt; The box used for the package. */
    #[Property]
    public ?string $boxId;

    /** Packages tab &gt; Type &gt; The type of package: Auto or Manual. */
    #[Property]
    public ?string $type;

    /** Packages tab &gt; Description &gt; The description of the item or description of the box contents. */
    #[Property]
    public ?string $description;

    /** Packages tab &gt; Weight &gt; The gross weight of the package. */
    #[Property]
    public ?float $weight;

    /** Packages tab &gt; UoM &gt; The unit of measure in which the weight of the package is specified. */
    #[Property]
    public ?string $uom;

    /** Packages tab &gt; Volume &gt; The gross volume of the package. */
    #[Property]
    public ?float $volume;

    /** Packages tab &gt; VolumeUoM &gt; The unit of measure in which the volume of the package is specified. */
    #[Property]
    public ?string $volumeUom;

    /** Packages tab &gt; Declared value &gt; The amount of the package specified for insurance, you can edit the value if needed. */
    #[Property]
    public ?float $declaredValue;

    /** Packages tab &gt; Cost of delivery amount &gt; The amount to be charged on delivery of the package, you can edit the value if needed. */
    #[Property]
    public ?float $coDamount;

    /** Packages tab &gt; Tracking number &gt; The tracking number provided for the package by the carrier if integration with carrier is configured. */
    #[Property]
    public ?string $trackingNumber;

    /** Packages tab &gt; Customer ref. no. 1 &gt; An auxiliary reference number to appear on the carrier label for the box. */
    #[Property]
    public ?string $customRefNbr1;

    /** Packages tab &gt; Customer ref. no. 2 &gt; An additional auxiliary reference number to appear on the carrier label for the box. */
    #[Property]
    public ?string $customRefNbr2;
}
