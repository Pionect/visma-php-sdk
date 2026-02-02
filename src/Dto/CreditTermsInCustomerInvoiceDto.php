<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part &gt; Terms* &gt; The credit terms used in relations with the customer.
 *
 * @method static \Pionect\VismaSdk\Factories\CreditTermsInCustomerInvoiceDtoFactory testFactory()
 */
class CreditTermsInCustomerInvoiceDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
