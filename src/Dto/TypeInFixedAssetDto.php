<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * The type of this fixed asset
 *
 * @method static \Pionect\VismaSdk\Factories\TypeInFixedAssetDtoFactory testFactory()
 */
class TypeInFixedAssetDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The type id of this fixed asset */
        #[MapName('assetTypeID')]
        public ?string $assetTypeId = null,
        /** The type description */
        public ?string $description = null,
    ) {}
}
