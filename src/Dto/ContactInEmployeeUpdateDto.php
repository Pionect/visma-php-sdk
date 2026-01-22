<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General information tab &gt; Contact section &gt;
 */
class ContactInEmployeeUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $firstName;

    #[Property]
    public ?\DtoValueOfString $lastName;

    #[Property]
    public ?\DtoValueOfString $middleName;

    #[Property]
    public ?\DtoValueOfString $email;

    #[Property]
    public ?\DtoValueOfString $phone1;

    #[Property]
    public ?\DtoValueOfString $phone2;

    #[Property]
    public ?\DtoValueOfString $phone3;

    #[Property]
    public ?\DtoValueOfString $fax;
}
