<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Invoice address tab &gt; The Invoice contact section.
 *
 * @method static \Pionect\VismaSdk\Factories\InvoiceContactInCustomerCreditNoteDtoFactory testFactory()
 */
class InvoiceContactInCustomerCreditNoteDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $contactId = null,
        public ?string $businessName = null,
        public ?string $attention = null,
        public ?string $email = null,
        public ?string $phone1 = null,
        public ?bool $overrideContact = null,
    ) {}
}
