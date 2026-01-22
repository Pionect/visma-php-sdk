<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory
 */
class SaleOrderUpdateDtoInReopenSalesOrderActionDto extends Model
{
    #[Property]
    public ?\DtoValueOfNullableOfInt32 $project;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $printDescriptionOnInvoice;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $printNoteOnExternalDocuments;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $printNoteOnInternalDocuments;

    #[Property]
    public ?\DtoValueOfSalesOrderContactUpdateDto $soBillingContact;

    #[Property]
    public ?\DtoValueOfSalesOrderAddressUpdateDto $soBillingAddress;

    #[Property]
    public ?\DtoValueOfString $customerVatzone;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $invoiceSeparately;

    #[Property]
    public ?\DtoValueOfString $terms;

    #[Property]
    public ?\DtoValueOfString $salesPerson;

    #[Property]
    public ?\DtoValueOfNullableOfGuid $owner;

    #[Property]
    public ?\DtoValueOfString $origOrderType;

    #[Property]
    public ?\DtoValueOfString $origOrderNbr;

    #[Property]
    public ?\DtoValueOfSalesOrderContactUpdateDto $soShippingContact;

    #[Property]
    public ?\DtoValueOfSalesOrderAddressUpdateDto $soShippingAddress;

    #[Property]
    public ?\DtoValueOfNullableOfDateTime $schedShipment;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $shipSeparately;

    #[Property]
    public ?\DtoValueOfNullableOfSalesOrderShipCompleteStatuses $shipComplete;

    #[Property]
    public ?\DtoValueOfNullableOfDateTime $cancelBy;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $canceled;

    #[Property]
    public ?\DtoValueOfString $preferredWarehouse;

    #[Property]
    public ?\DtoValueOfString $shipVia;

    #[Property]
    public ?\DtoValueOfString $fobPoint;

    #[Property]
    public ?\DtoValueOfNullableOfInt16 $priority;

    #[Property]
    public ?\DtoValueOfString $shippingTerms;

    #[Property]
    public ?\DtoValueOfString $shippingZone;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $residentialDelivery;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $saturdayDelivery;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $insurance;

    #[Property]
    public ?\DtoValueOfNullableOfInt32 $transactionType;

    #[Property]
    public ?\DtoValueOfString $paymentMethod;

    #[Property]
    public ?\DtoValueOfString $cashAccount;

    #[Property]
    public ?\DtoValueOfString $paymentRef;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $isRotRutDeductible;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $emailed;

    #[Property]
    public ?\RotRutUpdateDto $rotRutDetails;

    #[Property]
    public ?array $lines;

    #[Property]
    public ?\orderTypeInSalesOrderUpdateDto $orderType;

    #[Property]
    public ?\DtoValueOfString $orderNumber;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $hold;

    #[Property]
    public ?\DtoValueOfNullableOfDateTime $date;

    #[Property]
    public ?\DtoValueOfNullableOfDateTime $requestOn;

    #[Property]
    public ?\DtoValueOfString $customerOrder;

    #[Property]
    public ?\DtoValueOfString $customerRefNo;

    #[Property]
    public ?\customerInSalesOrderUpdateDto $customer;

    #[Property]
    public ?\DtoValueOfString $location;

    #[Property]
    public ?\DtoValueOfNullableOfInt32 $contactId;

    #[Property]
    public ?\glnInSalesOrderUpdateDto $gln;

    #[Property]
    public ?\vatRegistrationIdInSalesOrderUpdateDto $vatRegistrationId;

    #[Property]
    public ?\DtoValueOfString $currency;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfBoolean $recalculateShipment;

    #[Property]
    public ?\DtoValueOfString $branchNumber;

    #[Property]
    public ?\DtoValueOfString $note;

    #[Property]
    public ?\DtoValueOfBoolean $overrideNumberSeries;
}
