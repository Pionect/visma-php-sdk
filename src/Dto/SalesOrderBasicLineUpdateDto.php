<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represent a Sales Order Line in Sales Order Controller. Used to pass data to server for
 * creating or updating an order line
 */
class SalesOrderBasicLineUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $branchNumber;

    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfNullableOfInt32 $lineNbr;

    #[Property]
    public ?\inventoryIdInSalesOrderBasicLineUpdateDto $inventoryId;

    #[Property]
    public ?\inventoryNumberInSalesOrderBasicLineUpdateDto $inventoryNumber;

    #[Property]
    public ?\DtoValueOfString $warehouse;

    #[Property]
    public ?\DtoValueOfString $uom;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $quantity;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $unitCost;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $unitPrice;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $discountPercent;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $discountAmount;

    #[Property]
    public ?\DtoValueOfString $discountCode;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $manualDiscount;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $discUnitPrice;

    #[Property]
    public ?\DtoValueOfString $lineDescription;

    #[Property]
    public ?\DtoValueOfString $note;
}
