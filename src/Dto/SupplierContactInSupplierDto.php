<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Purchase settings tab &gt; Shipping contact information section &gt;
 */
class SupplierContactInSupplierDto extends Model
{
    #[Property]
    public ?int $contactId;

    /** Name &gt; The legal name of to appear on the documents. */
    #[Property]
    public ?string $name;

    /** Attention &gt; The attention line as it is used in your customer's/supplier's/company's business letters. The intention of this line is to direct the letter to the right person if the letter is not addressed to any specific person. */
    #[Property]
    public ?string $attention;

    /** Email &gt; The email address of the customer/supplier/company as a business entity. */
    #[Property]
    public ?string $email;

    /** Web &gt; The website of the company, if one exists. */
    #[Property]
    public ?string $web;

    /** Phone 1 &gt; The default phone number. */
    #[Property]
    public ?string $phone1;

    /** Phone 2 &gt; An additional phone number. */
    #[Property]
    public ?string $phone2;

    /** Fax &gt; The fax number. */
    #[Property]
    public ?string $fax;
}
