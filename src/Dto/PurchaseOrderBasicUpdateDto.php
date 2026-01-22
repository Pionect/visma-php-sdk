<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represent a Purchase Order in Purchase Order Controller. Used to pass data to server for
 * creating or updating an order
 * Supplier is mandatory to create Purchase Order, customer can be
 * identified by Supplier, GLN or VatRegistrationId
 */
class PurchaseOrderBasicUpdateDto extends Model
{
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
    public ?\supplierInPurchaseOrderBasicUpdateDto $supplier;

    #[Property]
    public ?\DtoValueOfString $location;

    #[Property]
    public ?\glnInPurchaseOrderBasicUpdateDto $gln;

    #[Property]
    public ?\vatRegistrationIdInPurchaseOrderBasicUpdateDto $vatRegistrationId;

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
    public ?\customStr1InPurchaseOrderBasicUpdateDto $customStr1;

    #[Property]
    public ?\customStr2InPurchaseOrderBasicUpdateDto $customStr2;

    #[Property]
    public ?\customStr3InPurchaseOrderBasicUpdateDto $customStr3;

    #[Property]
    public ?\customStr4InPurchaseOrderBasicUpdateDto $customStr4;

    #[Property]
    public ?\customStr5InPurchaseOrderBasicUpdateDto $customStr5;

    #[Property]
    public ?\customDec1InPurchaseOrderBasicUpdateDto $customDec1;

    #[Property]
    public ?\customDec2InPurchaseOrderBasicUpdateDto $customDec2;

    #[Property]
    public ?\customInt1InPurchaseOrderBasicUpdateDto $customInt1;

    #[Property]
    public ?\customInt2InPurchaseOrderBasicUpdateDto $customInt2;

    #[Property]
    public ?\customDateTimeUTC1InPurchaseOrderBasicUpdateDto $customDateTimeUtc1;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;
}
