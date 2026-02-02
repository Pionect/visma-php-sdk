<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Financial details tab &gt; The VAT info section &gt; Dunning letter date &gt;
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerVatZoneInCustomerInvoiceDtoFactory testFactory()
 */
class CustomerVatZoneInCustomerInvoiceDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
