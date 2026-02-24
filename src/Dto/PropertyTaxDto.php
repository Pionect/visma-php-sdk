<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\PropertyTaxDtoFactory testFactory()
 */
class PropertyTaxDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\PropertyTaxDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The property tax group id of this fixed asset */
        #[MapName('propertyTaxID')]
        public ?string $propertyTaxId = null,
        /** The description of the property tax group of this fixed asset */
        public ?string $description = null,
    ) {}
}
