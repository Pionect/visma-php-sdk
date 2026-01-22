<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CustomerDebitNoteUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $paymentMethodId;

    #[Property]
    public ?\DtoValueOfString $creditTermsId;

    #[Property]
    public ?\DtoValueOfString $currencyId;

    #[Property]
    public ?\DtoValueOfString $customerRefNumber;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $cashDiscountDate;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $documentDueDate;

    #[Property]
    public ?\DtoValueOfString $externalReference;

    #[Property]
    public ?\DtoValueOfDecimal $exchangeRate;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $domesticServicesDeductibleDocument;

    #[Property]
    public ?\DtoValueOfString $paymentReference;

    #[Property]
    public ?\DtoValueOfNullableOfInt32 $contact;

    #[Property]
    public ?\RotRutUpdateDto $rotRutDetails;

    #[Property]
    public ?array $taxDetailLines;

    #[Property]
    public ?array $lines;

    #[Property]
    public ?\DtoValueOfString $customerVatZoneId;

    #[Property]
    public ?\DtoValueOfSalesInvoiceAddressUpdateDto $invoiceAddress;

    #[Property]
    public ?\DtoValueOfSalesInvoiceContactUpdateDto $invoiceContact;

    #[Property]
    public ?\DtoValueOfBoolean $overrideNumberSeries;

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
    public ?\postPeriodInCustomerDebitNoteUpdateDto $postPeriod;

    #[Property]
    public ?\financialPeriodInCustomerDebitNoteUpdateDto $financialPeriod;

    #[Property]
    public ?\DtoValueOfString $invoiceText;

    #[Property]
    public ?\DtoValueOfString $locationId;

    #[Property]
    public ?\salesPersonIDInCustomerDebitNoteUpdateDto $salesPersonId;

    #[Property]
    public ?\salespersonInCustomerDebitNoteUpdateDto $salesperson;

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
