<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * This class represents an attribute in FixedAssetPropertyTaxGroup. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FixedAssetPropertyTaxDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FixedAssetPropertyTaxDtoFactory factory()
 */
class FixedAssetPropertyTaxDto extends Model
{
    public function __construct(
        #[MapName('propertyTaxID')]
        public ?string $propertyTaxId = null,
        public ?string $description = null,
        public ?bool $active = null,
        public ?array $details = null,
        public ?string $errorInfo = null,
    ) {}
}
