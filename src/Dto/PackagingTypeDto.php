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
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $boxId = null,
        public ?string $description = null,
        public int|float|null $boxWeight = null,
        public int|float|null $maxWeight = null,
        public ?string $weightUoM = null,
        public int|float|null $maxVolume = null,
        public ?string $volumeUoM = null,
        public ?int $length = null,
        public ?int $width = null,
        public ?int $height = null,
        public ?bool $activeByDefault = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}
