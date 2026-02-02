<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The table &gt; VAT category &gt; The VAT category (if applied) for the transaction. Unless you
 * specify otherwise, it is the default VAT category of the supplier location's VAT zone.
 *
 * @method static \Pionect\VismaSdk\Factories\VatCodeInSupplierInvoiceLineDtoFactory testFactory()
 */
class VatCodeInSupplierInvoiceLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
