<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represent a Sales Order in Sales Order Controller. Used to pass data to server for
 * creating or updating an order
 */
class SalesOrderBasicUpdateDto extends Model
{
    #[Property]
    public ?array $lines;

    #[Property]
    public ?\orderTypeInSalesOrderBasicUpdateDto $orderType;

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
    public ?\customerInSalesOrderBasicUpdateDto $customer;

    #[Property]
    public ?\DtoValueOfString $location;

    #[Property]
    public ?\DtoValueOfNullableOfInt32 $contactId;

    #[Property]
    public ?\glnInSalesOrderBasicUpdateDto $gln;

    #[Property]
    public ?\vatRegistrationIdInSalesOrderBasicUpdateDto $vatRegistrationId;

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
