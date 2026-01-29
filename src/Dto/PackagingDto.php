<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

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
    /** The weight of the <see cref="!:BaseUnit">Base Unit</see> of the item. */
    #[Property]
    public ?float $baseItemWeight;

    /** The <see cref="!:INUnit">Unit of Measure</see> used for the <see cref="P:Visma.net.ERP.Web.Api.Model.V1.IN.PackagingDto.BaseItemWeight">Weight</see> of the item. */
    #[Property]
    public ?string $weightUom;

    /** The volume of the <see cref="!:BaseUnit">Base Unit</see> of the item. */
    #[Property]
    public ?float $baseItemVolume;

    /** The <see cref="!:INUnit">Unit of Measure</see> used for the <see cref="P:Visma.net.ERP.Web.Api.Model.V1.IN.PackagingDto.BaseItemVolume">Volume</see> of the item. */
    #[Property]
    public ?string $volumeUom;
}
