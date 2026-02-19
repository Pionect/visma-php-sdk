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
        /** The current department id of this fixed asset */
        #[MapName('departmentID')]
        public ?string $departmentId = null,
        /** The current branch id of this fixed asset */
        #[MapName('branchID')]
        public ?string $branchId = null,
    ) {}
}
