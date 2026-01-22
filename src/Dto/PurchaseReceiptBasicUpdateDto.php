<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Purchase Receipt in PurchaseReceiptBasicController. Used for adding data.
 */
class PurchaseReceiptBasicUpdateDto extends Model
{
    #[Property]
    public ?array $lines;

    #[Property]
    public ?\DtoValueOfPurchaseReceiptType $receiptType;

    #[Property]
    public ?\DtoValueOfString $receiptNbr;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $hold;

    #[Property]
    public ?\DtoValueOfNullableOfDateTime $date;

    #[Property]
    public ?\postPeriodInPurchaseReceiptBasicUpdateDto $postPeriod;

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
    public ?\customStr1InPurchaseReceiptBasicUpdateDto $customStr1;

    #[Property]
    public ?\customStr2InPurchaseReceiptBasicUpdateDto $customStr2;

    #[Property]
    public ?\customStr3InPurchaseReceiptBasicUpdateDto $customStr3;

    #[Property]
    public ?\customStr4InPurchaseReceiptBasicUpdateDto $customStr4;

    #[Property]
    public ?\customStr5InPurchaseReceiptBasicUpdateDto $customStr5;

    #[Property]
    public ?\customDec1InPurchaseReceiptBasicUpdateDto $customDec1;

    #[Property]
    public ?\customDec2InPurchaseReceiptBasicUpdateDto $customDec2;

    #[Property]
    public ?\customInt1InPurchaseReceiptBasicUpdateDto $customInt1;

    #[Property]
    public ?\customInt2InPurchaseReceiptBasicUpdateDto $customInt2;

    #[Property]
    public ?\customDateTimeUTC1InPurchaseReceiptBasicUpdateDto $customDateTimeUtc1;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;
}
