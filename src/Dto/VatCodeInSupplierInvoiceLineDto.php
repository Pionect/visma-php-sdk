<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The table &gt; VAT category &gt; The VAT category (if applied) for the transaction. Unless you
 * specify otherwise, it is the default VAT category of the supplier location's VAT zone.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatCodeInSupplierInvoiceLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatCodeInSupplierInvoiceLineDtoFactory factory()
 */
class VatCodeInSupplierInvoiceLineDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
