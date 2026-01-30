<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The <see cref="!:INUnit">Unit of Measure</see> used for the <see
 * cref="P:Visma.net.ERP.Web.Api.Model.V1.IN.PackagingUpdateDto.BaseItemWeight">Weight</see> of the
 * item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WeightUominPackagingUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WeightUominPackagingUpdateDtoFactory factory()
 */
class WeightUominPackagingUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
