<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FixedAssetLocationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FixedAssetLocationDtoFactory factory()
 */
class FixedAssetLocationDto extends Model
{
    public function __construct(
        #[MapName('departmentID')]
        public ?string $departmentId = null,
        #[MapName('branchID')]
        public ?string $branchId = null,
    ) {}
}
