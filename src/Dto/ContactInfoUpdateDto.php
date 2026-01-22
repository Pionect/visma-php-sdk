<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ContactInfoUpdateDto extends Model
{
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
