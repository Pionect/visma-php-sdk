<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General information tab &gt; Address info section &gt;
 */
class AddressInEmployeeUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $addressLine1;

    #[Property]
    public ?\DtoValueOfString $addressLine2;

    #[Property]
    public ?\DtoValueOfString $addressLine3;

    #[Property]
    public ?\DtoValueOfString $postalCode;

    #[Property]
    public ?\DtoValueOfString $city;

    #[Property]
    public ?\DtoValueOfString $countryId;

    #[Property]
    public ?\DtoValueOfString $county;
}
