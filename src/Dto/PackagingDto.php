<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * This class represents a Packaging part of InventoryItem in InventoryItemController. Used for getting
 * data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PackagingDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PackagingDtoFactory factory()
 */
class PackagingDto extends Model
{
    public function __construct(
        public int|float|null $baseItemWeight = null,
        #[MapName('weightUOM')]
        public ?string $weightUom = null,
        public int|float|null $baseItemVolume = null,
        #[MapName('volumeUOM')]
        public ?string $volumeUom = null,
    ) {}
}
