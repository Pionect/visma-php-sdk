<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\FixedAssetPropertyTaxQueryParametersFactory testFactory()
 */
class FixedAssetPropertyTaxQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[MapName('propertyTaxID')]
        public ?string $propertyTaxId = null,
        public ?bool $active = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
