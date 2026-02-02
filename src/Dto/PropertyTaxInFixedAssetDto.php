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
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('propertyTaxID')]
        public ?string $propertyTaxId = null,
        public ?string $description = null,
    ) {}
}
