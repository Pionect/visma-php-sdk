<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a PackagingType in PackagingTypeController. Used by getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\PackagingTypeDtoFactory testFactory()
 */
class PackagingTypeDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\PackagingTypeDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Mandatory field: The table > Box ID* > The ID of the type of box. */
        public ?string $boxId = null,
        /** Description > A description of the box. */
        public ?string $description = null,
        /**
         * Tare weight > The weight of an empty box of this type, which may include the
         * weight of any packaging material used to pack items inside the box.
         */
        public int|float|null $boxWeight = null,
        /** Max weight > The maximum weight a box of the type can hold. */
        public int|float|null $maxWeight = null,
        /** Weight UoM > The unit of measure used for the weight. */
        public ?string $weightUoM = null,
        /**
         * Max. volume > The maximum volume of items that can fit into a package of the
         * type.
         */
        public int|float|null $maxVolume = null,
        /**
         * Volume UoM > The unit of measure used for the volume as specified in the
         * Inventory preferences (IN101000) window.
         */
        public ?string $volumeUoM = null,
        /** Length > The length of the package. */
        public ?int $length = null,
        /** Width > The width of the package. */
        public ?int $width = null,
        /** Height > The height of the package. */
        public ?int $height = null,
        /**
         * Active by default > If you select this check box, the package will be added
         * by default to the list of packages for each new ship via code.
         */
        public ?bool $activeByDefault = null,
        /** The date and time when the type was last modified. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}
