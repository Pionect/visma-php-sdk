<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class WarehouseContactDto extends Model
{
    /** Information retrieved from the system. */
    #[Property]
    public ?int $contactId;

    /** Company name &gt; The legal business name of the warehouse to appear on the documents. */
    #[Property]
    public ?string $companyName;

    /** Attention &gt; The department or person to be noted on the attention line, if this line is used by your company. */
    #[Property]
    public ?string $attention;

    /** Email &gt; The email address of the contact person assigned to this warehouse. */
    #[Property]
    public ?string $email;

    /** Web &gt; The URL of the web page where information about the warehouse is published. */
    #[Property]
    public ?string $web;

    /** Phone 1 &gt; The primary phone number of the contact person assigned to this warehouse. */
    #[Property]
    public ?string $phone1;

    /** Phone 2 &gt; 	A secondary phone number of the contact person assigned to this warehouse. */
    #[Property]
    public ?string $phone2;

    /** Fax &gt; The fax number of the contact person assigned to this warehouse. */
    #[Property]
    public ?string $fax;
}
