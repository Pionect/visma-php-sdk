<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Location in LocationController. Used to create and update Location.
 */
class LocationUpdateDto extends Model
{
    #[Property]
    public ?\baccountIdInLocationUpdateDto $baccountId;

    #[Property]
    public ?\locationIdInLocationUpdateDto $locationId;

    #[Property]
    public ?\DtoValueOfString $locationName;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $active;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $addressIsSameAsMain;

    #[Property]
    public ?\DtoValueOfAddressUpdateDto $address;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $contactIsSameAsMain;

    #[Property]
    public ?\DtoValueOfContactInfoUpdateDto $contact;

    #[Property]
    public ?\DtoValueOfString $vatRegistrationId;

    #[Property]
    public ?\DtoValueOfString $vatZone;

    #[Property]
    public ?\DtoValueOfString $ediCode;

    #[Property]
    public ?\DtoValueOfString $gln;

    #[Property]
    public ?\DtoValueOfString $corporateId;

    #[Property]
    public ?\DtoValueOfPeppolSchemeUpdateDto $peppolScheme;
}
