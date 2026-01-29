<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Packaging tab
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PackagingInInventoryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PackagingInInventoryDtoFactory factory()
 */
class PackagingInInventoryDto extends Model
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
