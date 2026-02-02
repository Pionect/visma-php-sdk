<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\PropertyTaxDtoFactory testFactory()
 */
class PropertyTaxDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('propertyTaxID')]
        public ?string $propertyTaxId = null,
        public ?string $description = null,
    ) {}
}
