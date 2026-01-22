<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represent a Purchase Order in Purchase Order Controller. Used to pass data to server for
 * creating or updating an order
 */
class PurchaseOrderUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfNullableOfPOShippingDestinationType $shippingDestinationType;

    #[Property]
    public ?\DtoValueOfString $shipTo;

    #[Property]
    public ?\DtoValueOfString $shippingLocation;

    #[Property]
    public ?\DtoValueOfPurchaseOrderContactUpdateDto $shippingContact;

    #[Property]
    public ?\DtoValueOfPurchaseOrderAddressUpdateDto $shippingAddress;

    #[Property]
    public ?\DtoValueOfString $fobPoint;

    #[Property]
    public ?\DtoValueOfString $shipVia;

    #[Property]
    public ?\DtoValueOfString $shipTerms;

    #[Property]
    public ?\DtoValueOfPurchaseOrderContactUpdateDto $remitContact;

    #[Property]
    public ?\DtoValueOfPurchaseOrderAddressUpdateDto $remitAddress;

    #[Property]
    public ?\DtoValueOfString $terms;

    #[Property]
    public ?\DtoValueOfString $supplierVatZone;

    #[Property]
    public ?array $discountDetails;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $dontPrint;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $dontEmail;

    #[Property]
    public ?\DtoValueOfNullableOfPurchaseOrderType $orderType;

    #[Property]
    public ?\DtoValueOfString $orderNumber;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $hold;

    #[Property]
    public ?\DtoValueOfNullableOfDateTime $date;

    #[Property]
    public ?\DtoValueOfNullableOfDateTime $promisedOn;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\supplierInPurchaseOrderUpdateDto $supplier;

    #[Property]
    public ?\DtoValueOfString $location;

    #[Property]
    public ?\glnInPurchaseOrderUpdateDto $gln;

    #[Property]
    public ?\vatRegistrationIdInPurchaseOrderUpdateDto $vatRegistrationId;

    #[Property]
    public ?\DtoValueOfNullableOfGuid $owner;

    #[Property]
    public ?\DtoValueOfString $currency;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $exchangeRate;

    #[Property]
    public ?\DtoValueOfString $supplierRef;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $controlTotal;

    #[Property]
    public ?\DtoValueOfString $branch;

    #[Property]
    public ?array $lines;

    #[Property]
    public ?bool $changeDatesOnLines;

    #[Property]
    public ?\DtoValueOfString $note;

    #[Property]
    public ?\DtoValueOfBoolean $overrideNumberSeries;

    #[Property]
    public ?\customStr1InPurchaseOrderUpdateDto $customStr1;

    #[Property]
    public ?\customStr2InPurchaseOrderUpdateDto $customStr2;

    #[Property]
    public ?\customStr3InPurchaseOrderUpdateDto $customStr3;

    #[Property]
    public ?\customStr4InPurchaseOrderUpdateDto $customStr4;

    #[Property]
    public ?\customStr5InPurchaseOrderUpdateDto $customStr5;

    #[Property]
    public ?\customDec1InPurchaseOrderUpdateDto $customDec1;

    #[Property]
    public ?\customDec2InPurchaseOrderUpdateDto $customDec2;

    #[Property]
    public ?\customInt1InPurchaseOrderUpdateDto $customInt1;

    #[Property]
    public ?\customInt2InPurchaseOrderUpdateDto $customInt2;

    #[Property]
    public ?\customDateTimeUTC1InPurchaseOrderUpdateDto $customDateTimeUtc1;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;
}
