<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Invoice address tab &gt; The Invoice contact section.
 */
class InvoiceContactInCustomerCreditNoteDto extends Model
{
    #[Property]
    public ?int $contactId;

    #[Property]
    public ?string $businessName;

    #[Property]
    public ?string $attention;

    #[Property]
    public ?string $email;

    #[Property]
    public ?string $phone1;

    #[Property]
    public ?bool $overrideContact;
}
