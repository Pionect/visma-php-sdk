<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Financial details tab &gt; The VAT info section &gt; Dunning letter date &gt;
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerVatZoneInCustomerInvoiceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerVatZoneInCustomerInvoiceDtoFactory factory()
 */
class CustomerVatZoneInCustomerInvoiceDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
