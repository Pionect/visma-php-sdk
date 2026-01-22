<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class SalesInvoiceContactUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfNullableOfBoolean $overrideContact;

    #[Property]
    public ?\DtoValueOfString $name;

    #[Property]
    public ?\DtoValueOfString $attention;

    #[Property]
    public ?\DtoValueOfString $email;

    #[Property]
    public ?\DtoValueOfString $phone1;
}
