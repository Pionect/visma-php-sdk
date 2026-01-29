<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FixedAssetLocationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FixedAssetLocationDtoFactory factory()
 */
class FixedAssetLocationDto extends Model
{
    /** The current department id of this fixed asset */
    #[Property]
    public ?string $departmentId;

    /** The current branch id of this fixed asset */
    #[Property]
    public ?string $branchId;
}
