<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\FixedAssetLocationDtoFactory testFactory()
 */
class FixedAssetLocationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('departmentID')]
        public ?string $departmentId = null,
        #[MapName('branchID')]
        public ?string $branchId = null,
    ) {}
}
