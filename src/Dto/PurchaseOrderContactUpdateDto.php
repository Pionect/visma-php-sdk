<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class PurchaseOrderContactUpdateDto extends Model
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
    public ?\DtoValueOfString $web;

    #[Property]
    public ?\DtoValueOfString $phone1;

    #[Property]
    public ?\DtoValueOfString $phone2;

    #[Property]
    public ?\DtoValueOfString $fax;
}
