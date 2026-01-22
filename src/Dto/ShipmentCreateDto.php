<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ShipmentCreateDto extends Model
{
    #[Property]
    public ?\DtoValueOfNullableOfShipmentTypes $shipmentType;

    #[Property]
    public ?\DtoValueOfNullableOfShipmentOperations $operation;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $shipmentDate;

    #[Property]
    public ?\DtoValueOfString $location;

    #[Property]
    public ?\DtoValueOfString $customer;

    #[Property]
    public ?\DtoValueOfString $owner;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $hold;

    #[Property]
    public ?\DtoValueOfString $fromWarehouse;

    #[Property]
    public ?\DtoValueOfString $toWarehouse;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $controlQuantity;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $overrideContact;

    #[Property]
    public ?\DtoValueOfString $businessName;

    #[Property]
    public ?\DtoValueOfString $attention;

    #[Property]
    public ?\DtoValueOfString $phone1;

    #[Property]
    public ?\DtoValueOfString $email;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $overrideAddress;

    #[Property]
    public ?\DtoValueOfString $addressLine1;

    #[Property]
    public ?\DtoValueOfString $addressLine2;

    #[Property]
    public ?\DtoValueOfString $addressLine3;

    #[Property]
    public ?\DtoValueOfString $city;

    #[Property]
    public ?\DtoValueOfString $country;

    #[Property]
    public ?\DtoValueOfString $county;

    #[Property]
    public ?\DtoValueOfString $postalCode;

    #[Property]
    public ?\DtoValueOfString $shipVia;

    #[Property]
    public ?\DtoValueOfString $fobPoint;

    #[Property]
    public ?\DtoValueOfString $shippingTerms;

    #[Property]
    public ?\DtoValueOfString $shippingZone;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $residentialDelivery;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $saturdayDelivery;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $useCustomerAccount;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $insurance;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $freightAmt;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $freightCost;

    #[Property]
    public ?\DtoValueOfNullableOfInt32 $transactionType;

    #[Property]
    public ?\DtoValueOfNullableOfTransportationModes $modeOfTrasport;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $container;

    #[Property]
    public ?\DtoValueOfString $note;

    #[Property]
    public ?array $shipmentDetailLines;

    #[Property]
    public ?array $shipmentPackageLines;

    #[Property]
    public ?\customStr1InShipmentCreateDto $customStr1;

    #[Property]
    public ?\customStr2InShipmentCreateDto $customStr2;

    #[Property]
    public ?\customStr3InShipmentCreateDto $customStr3;

    #[Property]
    public ?\customStr4InShipmentCreateDto $customStr4;

    #[Property]
    public ?\customStr5InShipmentCreateDto $customStr5;

    #[Property]
    public ?\customDec1InShipmentCreateDto $customDec1;

    #[Property]
    public ?\customDec2InShipmentCreateDto $customDec2;

    #[Property]
    public ?\customInt1InShipmentCreateDto $customInt1;

    #[Property]
    public ?\customInt2InShipmentCreateDto $customInt2;

    #[Property]
    public ?\customDateTimeUTC1InShipmentCreateDto $customDateTimeUtc1;
}
