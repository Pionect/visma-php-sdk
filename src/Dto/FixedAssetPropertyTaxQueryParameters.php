<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FixedAssetPropertyTaxQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FixedAssetPropertyTaxQueryParametersFactory testFactory()
 */
class FixedAssetPropertyTaxQueryParameters extends Model
{
    public function __construct(
        #[MapName('propertyTaxID')]
        public ?string $propertyTaxId = null,
        public ?bool $active = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
