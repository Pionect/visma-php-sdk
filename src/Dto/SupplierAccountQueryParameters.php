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
        /**
         * The list of supplier itemIds to search the expense account for. If the list
         * empty, then the general expense account for the specific supplier is returned
         */
        public ?array $supplierItemId = null,
        /** The vat registration id of the supplier */
        public ?string $vatRegistrationId = null,
        /** Indicates if all lines are taxable or not. Default is false */
        public ?bool $linesNonTaxable = null,
    ) {}
}
