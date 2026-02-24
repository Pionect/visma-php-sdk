<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * The property tax group this fixed asset is conntected to
 *
 * @method static \Pionect\VismaSdk\Factories\PropertyTaxInFixedAssetDtoFactory testFactory()
 */
class PropertyTaxInFixedAssetDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\PropertyTaxInFixedAssetDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The property tax group id of this fixed asset */
        #[MapName('propertyTaxID')]
        public ?string $propertyTaxId = null,
        /** The description of the property tax group of this fixed asset */
        public ?string $description = null,
    ) {}
}
