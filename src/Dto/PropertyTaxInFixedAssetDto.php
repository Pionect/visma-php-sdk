<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * The property tax group this fixed asset is conntected to
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PropertyTaxInFixedAssetDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PropertyTaxInFixedAssetDtoFactory factory()
 */
class PropertyTaxInFixedAssetDto extends Model
{
    public function __construct(
        #[MapName('propertyTaxID')]
        public ?string $propertyTaxId = null,
        public ?string $description = null,
    ) {}
}
