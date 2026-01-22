<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CashSaleUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $paymentMethodId;

    #[Property]
    public ?\DtoValueOfString $creditTermsId;

    #[Property]
    public ?\paymentReferenceInCashSaleUpdateDto $paymentReference;

    #[Property]
    public ?array $cashSaleLines;

    #[Property]
    public ?\DtoValueOfString $referenceNumber;

    #[Property]
    public ?\DtoValueOfString $customerNumber;

    #[Property]
    public ?\DtoValueOfString $childCustomerNumber;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $consolidateInvoices;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $documentDate;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $origInvoiceDate;

    #[Property]
    public ?\DtoValueOfBoolean $hold;

    #[Property]
    public ?\postPeriodInCashSaleUpdateDto $postPeriod;

    #[Property]
    public ?\financialPeriodInCashSaleUpdateDto $financialPeriod;

    #[Property]
    public ?\DtoValueOfString $invoiceText;

    #[Property]
    public ?\DtoValueOfString $locationId;

    #[Property]
    public ?\salesPersonIDInCashSaleUpdateDto $salesPersonId;

    #[Property]
    public ?\salespersonInCashSaleUpdateDto $salesperson;

    #[Property]
    public ?\DtoValueOfString $note;

    #[Property]
    public ?\DtoValueOfString $branchNumber;

    #[Property]
    public ?\DtoValueOfString $cashAccount;

    #[Property]
    public ?\DtoValueOfBoolean $dontPrint;

    #[Property]
    public ?\DtoValueOfBoolean $dontEmail;
}
