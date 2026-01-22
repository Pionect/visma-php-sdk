<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class SupplierAccountQueryParameters extends Model
{
    /** The list of supplier itemIds to search the expense account for. If the list empty, then the general expense account for the specific supplier is returned */
    #[Property]
    public ?array $supplierItemId;

    /** The vat registration id of the supplier */
    #[Property]
    public ?string $vatRegistrationId;

    /** Indicates if all lines are taxable or not. Default is false */
    #[Property]
    public ?bool $linesNonTaxable;
}
