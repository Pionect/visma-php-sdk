<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * The current location of this fixed asset
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInFixedAssetDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInFixedAssetDtoFactory testFactory()
 */
class LocationInFixedAssetDto extends Model
{
    public function __construct(
        #[MapName('departmentID')]
        public ?string $departmentId = null,
        #[MapName('branchID')]
        public ?string $branchId = null,
    ) {}
}
