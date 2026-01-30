<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Invoice address tab &gt; The Invoice contact section.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InvoiceContactInCreditNoteDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InvoiceContactInCreditNoteDtoFactory testFactory()
 */
class InvoiceContactInCreditNoteDto extends Model
{
    public function __construct(
        public ?int $contactId = null,
        public ?string $businessName = null,
        public ?string $attention = null,
        public ?string $email = null,
        public ?string $phone1 = null,
        public ?bool $overrideContact = null,
    ) {}
}
