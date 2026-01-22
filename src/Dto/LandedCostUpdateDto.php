<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Landed Cost Line for Purchase Receipt in PurchaseReceiptController. Used for
 * getting data.
 */
class LandedCostUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?\DtoValueOfInt32 $lineNbr;

    #[Property]
    public ?\DtoValueOfString $landedCostCode;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfString $purchaseInvoiceNbr;

    #[Property]
    public ?\DtoValueOfString $supplierId;

    #[Property]
    public ?\DtoValueOfString $locationId;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $apBillDate;

    #[Property]
    public ?\DtoValueOfString $currency;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $amount;

    #[Property]
    public ?\DtoValueOfString $taxCategory;

    #[Property]
    public ?\DtoValueOfString $terms;

    #[Property]
    public ?\DtoValueOfString $inventoryId;

    #[Property]
    public ?\DtoValueOfNullableOfSupplierDocumentType $apDocType;

    #[Property]
    public ?\DtoValueOfString $apRefNbr;

    #[Property]
    public ?\DtoValueOfCustomerDocumentTypes $inDocType;

    #[Property]
    public ?\DtoValueOfString $inRefNbr;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $postponePurchaseInvoiceCreation;
}
