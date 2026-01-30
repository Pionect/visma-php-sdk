<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Invoicing setting tab &gt; Invoice contact section &gt;
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InvoiceContactInCustomerDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InvoiceContactInCustomerDtoFactory factory()
 */
class InvoiceContactInCustomerDto extends Model
{
    public function __construct(
        public ?int $contactId = null,
        public ?string $name = null,
        public ?string $attention = null,
        public ?string $email = null,
        public ?string $web = null,
        public ?string $phone1 = null,
        public ?string $phone2 = null,
        public ?string $fax = null,
    ) {}
}
