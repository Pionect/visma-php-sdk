<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Contact &gt; The contact associated with the customer.
 *
 * @method static \Pionect\VismaSdk\Factories\ContactInCustomerInvoiceDtoFactory testFactory()
 */
class ContactInCustomerInvoiceDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $id = null,
        public ?string $name = null,
    ) {}
}
