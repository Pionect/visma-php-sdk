<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * This class represents a Packaging part of InventoryItem in InventoryItemController. Used for
 * insert/update data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PackagingUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PackagingUpdateDtoFactory testFactory()
 */
class PackagingUpdateDto extends Model
{
    public function __construct(
        public ?BaseItemWeightInPackagingUpdateDto $baseItemWeight = null,
        #[MapName('weightUOM')]
        public ?WeightUominPackagingUpdateDto $weightUom = null,
        public ?BaseItemVolumeInPackagingUpdateDto $baseItemVolume = null,
        #[MapName('volumeUOM')]
        public ?VolumeUominPackagingUpdateDto $volumeUom = null,
    ) {}
}
