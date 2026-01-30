<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PropertyTaxDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PropertyTaxDtoFactory testFactory()
 */
class PropertyTaxDto extends Model
{
    public function __construct(
        #[MapName('propertyTaxID')]
        public ?string $propertyTaxId = null,
        public ?string $description = null,
    ) {}
}
