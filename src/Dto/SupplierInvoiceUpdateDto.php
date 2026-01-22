<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class SupplierInvoiceUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfNullableOfSupplierInvoiceTypes $documentType;

    #[Property]
    public ?\DtoValueOfString $referenceNumber;

    #[Property]
    public ?\DtoValueOfBoolean $hold;

    #[Property]
    public ?\DtoValueOfDateTime $date;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $origInvoiceDate;

    #[Property]
    public ?\postPeriodInSupplierInvoiceUpdateDto $postPeriod;

    #[Property]
    public ?\financialPeriodInSupplierInvoiceUpdateDto $financialPeriod;

    #[Property]
    public ?\DtoValueOfString $supplierReference;

    #[Property]
    public ?\DtoValueOfString $description;

    #[Property]
    public ?\DtoValueOfString $supplierNumber;

    #[Property]
    public ?\DtoValueOfString $locationId;

    #[Property]
    public ?\DtoValueOfString $currencyId;

    #[Property]
    public ?\DtoValueOfString $paymentRefNo;

    #[Property]
    public ?\DtoValueOfString $creditTermsId;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $dueDate;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $cashDiscountDate;

    #[Property]
    public ?\DtoValueOfString $note;

    #[Property]
    public ?\DtoValueOfDecimal $exchangeRate;

    #[Property]
    public ?\DtoValueOfString $branchNumber;

    #[Property]
    public ?\DtoValueOfDecimal $roundingDiffInCurrency;

    #[Property]
    public ?\DtoValueOfNullableOfTaxCalcMode $taxCalculationMode;

    #[Property]
    public ?\DtoValueOfString $supplierTaxZone;

    #[Property]
    public ?\DtoValueOfString $cashAccount;

    #[Property]
    public ?\DtoValueOfString $paymentMethod;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $payDate;

    #[Property]
    public ?\DtoValueOfDecimal $amount;

    #[Property]
    public ?\DtoValueOfDecimal $vatAmount;

    #[Property]
    public ?\DtoValueOfString $paymentMessage;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $applyRetainage;

    #[Property]
    public ?array $taxDetailLines;

    #[Property]
    public ?array $invoiceLines;

    #[Property]
    public ?\ApprovalDetailsUpdateDto $approvalDetails;

    #[Property]
    public ?array $addPoreceiptLines;

    #[Property]
    public ?array $addPurchaseOrders;

    #[Property]
    public ?array $landedCosts;

    #[Property]
    public ?\paySelectedInSupplierInvoiceUpdateDto $paySelected;

    #[Property]
    public ?\DtoValueOfBoolean $overrideNumberSeries;

    #[Property]
    public ?\validateLineDetailsInSupplierInvoiceUpdateDto $validateLineDetails;
}
