<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\FixedAssetLocationDtoFactory testFactory()
 */
class FixedAssetLocationDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\FixedAssetLocationDtoFactory> */
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
