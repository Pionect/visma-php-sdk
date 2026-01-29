<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The current location of this fixed asset
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInFixedAssetDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInFixedAssetDtoFactory factory()
 */
class LocationInFixedAssetDto extends Model
{
    /** The current department id of this fixed asset */
    #[Property]
    public ?string $departmentId;

    /** The current branch id of this fixed asset */
    #[Property]
    public ?string $branchId;
}
