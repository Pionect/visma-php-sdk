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
        /** The weight of the <see cref="!:BaseUnit">Base Unit</see> of the item. */
        public int|float|null $baseItemWeight = null,
        /**
         * The <see cref="!:INUnit">Unit of Measure</see> used for the <see
         * cref="P:Visma.net.ERP.Web.Api.Model.V1.IN.PackagingDto.BaseItemWeight">Weight</see>
         * of the item.
         */
        #[MapName('weightUOM')]
        public ?string $weightUom = null,
        /** The volume of the <see cref="!:BaseUnit">Base Unit</see> of the item. */
        public int|float|null $baseItemVolume = null,
        /**
         * The <see cref="!:INUnit">Unit of Measure</see> used for the <see
         * cref="P:Visma.net.ERP.Web.Api.Model.V1.IN.PackagingDto.BaseItemVolume">Volume</see>
         * of the item.
         */
        #[MapName('volumeUOM')]
        public ?string $volumeUom = null,
    ) {}
}
