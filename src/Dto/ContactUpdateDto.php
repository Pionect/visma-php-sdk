<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ContactUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfBoolean $active;

    #[Property]
    public ?\DtoValueOfEmployeeTitles $title;

    #[Property]
    public ?\DtoValueOfString $firstName;

    #[Property]
    public ?\DtoValueOfString $lastName;

    #[Property]
    public ?\DtoValueOfString $position;

    #[Property]
    public ?\DtoValueOfString $businessAccount;

    #[Property]
    public ?\DtoValueOfBoolean $sameAsAccount;

    #[Property]
    public ?\DtoValueOfAddressUpdateDto $address;

    #[Property]
    public ?\DtoValueOfString $email;

    #[Property]
    public ?\DtoValueOfString $web;

    #[Property]
    public ?\DtoValueOfString $phone1;

    #[Property]
    public ?\DtoValueOfString $phone2;

    #[Property]
    public ?\DtoValueOfString $phone3;

    #[Property]
    public ?\DtoValueOfString $fax;

    #[Property]
    public ?\DtoValueOfContactMethods $contactMethod;

    #[Property]
    public ?\DtoValueOfBoolean $doNotCall;

    #[Property]
    public ?\DtoValueOfBoolean $doNotFax;

    #[Property]
    public ?\DtoValueOfBoolean $doNotEmail;

    #[Property]
    public ?\DtoValueOfBoolean $doNotMail;

    #[Property]
    public ?\DtoValueOfBoolean $noMassMail;

    #[Property]
    public ?\DtoValueOfBoolean $noMarketing;
}
