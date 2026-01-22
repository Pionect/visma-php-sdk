<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represent a Purchase Order Line in Purchase Order Controller. Used to pass data to server
 * for creating or updating an order line
 */
class PurchaseOrderLineUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfNullableOfInt32 $lineNumber;

    #[Property]
    public ?\DtoValueOfString $branch;

    #[Property]
    public ?\DtoValueOfString $inventory;

    #[Property]
    public ?\DtoValueOfNullableOfPoLineType $lineType;

    #[Property]
    public ?\DtoValueOfString $warehouse;

    #[Property]
    public ?\DtoValueOfString $lineDescription;

    #[Property]
    public ?\DtoValueOfString $uom;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $orderQty;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $unitCost;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $extCost;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $discountAmount;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $discountPercent;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $manualDiscount;

    #[Property]
    public ?\DtoValueOfString $discountCode;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $amount;

    #[Property]
    public ?\DtoValueOfString $alternateId;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $minReceipt;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $maxReceipt;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $completeOn;

    #[Property]
    public ?\DtoValueOfNullableOfPurchaseOrderReceiptAction $receiptAction;

    #[Property]
    public ?\DtoValueOfString $taxCategory;

    #[Property]
    public ?\DtoValueOfString $account;

    #[Property]
    public ?array $sub;

    #[Property]
    public ?\DtoValueOfString $project;

    #[Property]
    public ?\DtoValueOfString $projectTask;

    #[Property]
    public ?\DtoValueOfNullableOfDateTime $requested;

    #[Property]
    public ?\DtoValueOfNullableOfDateTime $promised;

    #[Property]
    public ?\DtoValueOfString $note;

    #[Property]
    public ?\customStr1InPurchaseOrderLineUpdateDto $customStr1;

    #[Property]
    public ?\customStr2InPurchaseOrderLineUpdateDto $customStr2;

    #[Property]
    public ?\customStr3InPurchaseOrderLineUpdateDto $customStr3;

    #[Property]
    public ?\customStr4InPurchaseOrderLineUpdateDto $customStr4;

    #[Property]
    public ?\customStr5InPurchaseOrderLineUpdateDto $customStr5;

    #[Property]
    public ?\customDec1InPurchaseOrderLineUpdateDto $customDec1;

    #[Property]
    public ?\customDec2InPurchaseOrderLineUpdateDto $customDec2;

    #[Property]
    public ?\customInt1InPurchaseOrderLineUpdateDto $customInt1;

    #[Property]
    public ?\customInt2InPurchaseOrderLineUpdateDto $customInt2;

    #[Property]
    public ?\customDateTimeUTC1InPurchaseOrderLineUpdateDto $customDateTimeUtc1;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $completed;
}
