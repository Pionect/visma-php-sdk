<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Contact &gt; The contact associated with the customer.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ContactInCustomerInvoiceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ContactInCustomerInvoiceDtoFactory factory()
 */
class ContactInCustomerInvoiceDto extends Model
{
    public function __construct(
        public ?int $id = null,
        public ?string $name = null,
    ) {}
}
