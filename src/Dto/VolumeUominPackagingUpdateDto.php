<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The <see cref="!:INUnit">Unit of Measure</see> used for the <see
 * cref="P:Visma.net.ERP.Web.Api.Model.V1.IN.PackagingUpdateDto.BaseItemVolume">Volume</see> of the
 * item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VolumeUominPackagingUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VolumeUominPackagingUpdateDtoFactory testFactory()
 */
class VolumeUominPackagingUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
