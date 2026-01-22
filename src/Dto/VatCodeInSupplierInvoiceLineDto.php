<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The table &gt; VAT category &gt; The VAT category (if applied) for the transaction. Unless you
 * specify otherwise, it is the default VAT category of the supplier location's VAT zone.
 */
class VatCodeInSupplierInvoiceLineDto extends Model
{
    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
