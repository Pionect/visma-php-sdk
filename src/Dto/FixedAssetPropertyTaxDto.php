<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents an attribute in FixedAssetPropertyTaxGroup. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\FixedAssetPropertyTaxDtoFactory testFactory()
 */
class FixedAssetPropertyTaxDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('propertyTaxID')]
        public ?string $propertyTaxId = null,
        public ?string $description = null,
        public ?bool $active = null,
        /** @var FixedAssetPropertyTaxDetailsDto[]|null */
        public ?array $details = null,
        public ?string $errorInfo = null,
    ) {}
}
