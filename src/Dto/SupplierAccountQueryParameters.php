<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierAccountQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierAccountQueryParametersFactory testFactory()
 */
class SupplierAccountQueryParameters extends Model
{
    public function __construct(
        public ?array $supplierItemId = null,
        public ?string $vatRegistrationId = null,
        public ?bool $linesNonTaxable = null,
    ) {}
}
