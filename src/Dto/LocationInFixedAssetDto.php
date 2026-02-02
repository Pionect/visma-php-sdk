<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * The current location of this fixed asset
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInFixedAssetDtoFactory testFactory()
 */
class LocationInFixedAssetDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('departmentID')]
        public ?string $departmentId = null,
        #[MapName('branchID')]
        public ?string $branchId = null,
    ) {}
}
