<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a PackagingType in PackagingTypeController. Used by getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PackagingTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PackagingTypeDtoFactory testFactory()
 */
class PackagingTypeDto extends Model
{
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
