<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Purchase Receipt in PurchaseReceiptController. Used for getting data.
 */
class PurchaseReceiptUpdateDto extends Model
{
    #[Property]
    public ?array $lines;

    #[Property]
    public ?array $landedCost;

    #[Property]
    public ?\DtoValueOfString $note;

    #[Property]
    public ?\DtoValueOfPurchaseReceiptType $receiptType;

    #[Property]
    public ?\DtoValueOfString $receiptNbr;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $hold;

    #[Property]
    public ?\DtoValueOfNullableOfDateTime $date;

    #[Property]
    public ?\postPeriodInPurchaseReceiptUpdateDto $postPeriod;

    #[Property]
    public ?\DtoValueOfString $warehouseId;

    #[Property]
    public ?\DtoValueOfString $supplierId;

    #[Property]
    public ?\DtoValueOfString $locationId;

    #[Property]
    public ?\DtoValueOfString $currency;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $exchangeRate;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $createBill;

    #[Property]
    public ?\DtoValueOfString $supplierRef;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $controlQty;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $controlAmount;

    #[Property]
    public ?\DtoValueOfString $branchNumber;

    #[Property]
    public ?\customStr1InPurchaseReceiptUpdateDto $customStr1;

    #[Property]
    public ?\customStr2InPurchaseReceiptUpdateDto $customStr2;

    #[Property]
    public ?\customStr3InPurchaseReceiptUpdateDto $customStr3;

    #[Property]
    public ?\customStr4InPurchaseReceiptUpdateDto $customStr4;

    #[Property]
    public ?\customStr5InPurchaseReceiptUpdateDto $customStr5;

    #[Property]
    public ?\customDec1InPurchaseReceiptUpdateDto $customDec1;

    #[Property]
    public ?\customDec2InPurchaseReceiptUpdateDto $customDec2;

    #[Property]
    public ?\customInt1InPurchaseReceiptUpdateDto $customInt1;

    #[Property]
    public ?\customInt2InPurchaseReceiptUpdateDto $customInt2;

    #[Property]
    public ?\customDateTimeUTC1InPurchaseReceiptUpdateDto $customDateTimeUtc1;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;
}
