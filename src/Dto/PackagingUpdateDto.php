<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Packaging part of InventoryItem in InventoryItemController. Used for
 * insert/update data.
 */
class PackagingUpdateDto extends Model
{
    #[Property]
    public ?baseItemWeightInPackagingUpdateDto $baseItemWeight;

    #[Property]
    public ?weightUOMInPackagingUpdateDto $weightUom;

    #[Property]
    public ?baseItemVolumeInPackagingUpdateDto $baseItemVolume;

    #[Property]
    public ?volumeUOMInPackagingUpdateDto $volumeUom;
}
