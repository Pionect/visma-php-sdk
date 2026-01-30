<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * The type of this fixed asset
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TypeInFixedAssetDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TypeInFixedAssetDtoFactory factory()
 */
class TypeInFixedAssetDto extends Model
{
    public function __construct(
        #[MapName('assetTypeID')]
        public ?string $assetTypeId = null,
        public ?string $description = null,
    ) {}
}
