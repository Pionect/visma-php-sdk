<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\PackageDetailLineDtoFactory testFactory()
 */
class PackageDetailLineDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\PackageDetailLineDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Packages tab > Line number. The sequence of the lines. */
        public ?int $lineNumber = null,
        /**
         * Packages tab > Confirmed > This check box indicates (if selected) that
         * shipping of the package specified on the line has been confirmed.
         */
        public ?bool $confirmed = null,
        /** Mandatory field: Packages tab > Box ID* > The box used for the package. */
        public ?string $boxId = null,
        /** Packages tab > Type > The type of package: Auto or Manual. */
        public ?string $type = null,
        /**
         * Packages tab > Description > The description of the item or description of
         * the box contents.
         */
        public ?string $description = null,
        /** Packages tab > Weight > The gross weight of the package. */
        public int|float|null $weight = null,
        /**
         * Packages tab > UoM > The unit of measure in which the weight of the package
         * is specified.
         */
        public ?string $uom = null,
        /** Packages tab > Volume > The gross volume of the package. */
        public int|float|null $volume = null,
        /**
         * Packages tab > VolumeUoM > The unit of measure in which the volume of the
         * package is specified.
         */
        #[MapName('volumeUOM')]
        public ?string $volumeUom = null,
        /**
         * Packages tab > Declared value > The amount of the package specified for
         * insurance, you can edit the value if needed.
         */
        public int|float|null $declaredValue = null,
        /**
         * Packages tab > Cost of delivery amount > The amount to be charged on delivery
         * of the package, you can edit the value if needed.
         */
        #[MapName('coDAmount')]
        public int|float|null $coDamount = null,
        /**
         * Packages tab > Tracking number > The tracking number provided for the package
         * by the carrier if integration with carrier is configured.
         */
        public ?string $trackingNumber = null,
        /**
         * Packages tab > Customer ref. no. 1 > An auxiliary reference number to appear
         * on the carrier label for the box.
         */
        public ?string $customRefNbr1 = null,
        /**
         * Packages tab > Customer ref. no. 2 > An additional auxiliary reference number
         * to appear on the carrier label for the box.
         */
        public ?string $customRefNbr2 = null,
    ) {}
}
