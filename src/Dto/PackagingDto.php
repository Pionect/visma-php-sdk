<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Packaging part of InventoryItem in InventoryItemController. Used for getting
 * data.
 *
 * @method static \Pionect\VismaSdk\Factories\PackagingDtoFactory testFactory()
 */
class PackagingDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public int|float|null $baseItemWeight = null,
        #[MapName('weightUOM')]
        public ?string $weightUom = null,
        public int|float|null $baseItemVolume = null,
        #[MapName('volumeUOM')]
        public ?string $volumeUom = null,
    ) {}
}
