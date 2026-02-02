<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierAccountQueryParametersFactory testFactory()
 */
class SupplierAccountQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?array $supplierItemId = null,
        public ?string $vatRegistrationId = null,
        public ?bool $linesNonTaxable = null,
    ) {}
}
