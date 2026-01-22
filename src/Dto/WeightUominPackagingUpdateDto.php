<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The <see cref="!:INUnit">Unit of Measure</see> used for the <see
 * cref="P:Visma.net.ERP.Web.Api.Model.V1.IN.PackagingUpdateDto.BaseItemWeight">Weight</see> of the
 * item.
 */
class WeightUominPackagingUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
