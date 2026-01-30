<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Customer &gt; The customer associated with the document.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerInCustomerInvoiceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInCustomerInvoiceDtoFactory factory()
 */
class CustomerInCustomerInvoiceDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
