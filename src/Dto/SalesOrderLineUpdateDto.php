<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represent a Sales Order Line in Sales Order Controller. Used to pass data to server for
 * creating or updating an order line
 */
class SalesOrderLineUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $invoiceNbr;

    #[Property]
    public ?\DtoValueOfNullableOfSalesOrderOperations $salesOrderOperation;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $freeItem;

    #[Property]
    public ?\DtoValueOfNullableOfDateTime $requestedOn;

    #[Property]
    public ?\DtoValueOfNullableOfDateTime $shipOn;

    #[Property]
    public ?\DtoValueOfNullableOfSalesOrderShipCompleteStatuses $shipComplete;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $undershipThreshold;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $overshipThreshold;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $completed;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $markForPo;

    #[Property]
    public ?\DtoValueOfNullableOfInventoryReplenishmentSources $poSource;

    #[Property]
    public ?\DtoValueOfString $lotSerialNbr;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $expirationDate;

    #[Property]
    public ?\DtoValueOfString $reasonCode;

    #[Property]
    public ?\DtoValueOfString $salesPerson;

    #[Property]
    public ?\DtoValueOfString $taxCategory;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $commissionable;

    #[Property]
    public ?\DtoValueOfString $alternateId;

    #[Property]
    public ?\DtoValueOfString $projectTask;

    #[Property]
    public ?array $subaccount;

    #[Property]
    public ?\DtoValueOfString $externalLink;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $isRotRutDeductible;

    #[Property]
    public ?\DtoValueOfString $branchNumber;

    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfNullableOfInt32 $lineNbr;

    #[Property]
    public ?\inventoryIdInSalesOrderLineUpdateDto $inventoryId;

    #[Property]
    public ?\inventoryNumberInSalesOrderLineUpdateDto $inventoryNumber;

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
