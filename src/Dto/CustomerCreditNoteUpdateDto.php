<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CustomerCreditNoteUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $currencyId;

    #[Property]
    public ?\DtoValueOfString $customerRefNumber;

    #[Property]
    public ?\DtoValueOfString $externalReference;

    #[Property]
    public ?\DtoValueOfNullableOfInt32 $contact;

    #[Property]
    public ?\DtoValueOfString $project;

    #[Property]
    public ?array $lines;

    #[Property]
    public ?array $taxDetails;

    #[Property]
    public ?array $applicationLines;

    #[Property]
    public ?\DtoValueOfString $customerVatZoneId;

    #[Property]
    public ?\DtoValueOfSalesInvoiceAddressUpdateDto $invoiceAddress;

    #[Property]
    public ?\DtoValueOfSalesInvoiceContactUpdateDto $invoiceContact;

    #[Property]
    public ?\DtoValueOfBoolean $overrideNumberSeries;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $sendToAutoInvoice;

    #[Property]
    public ?\DtoValueOfDecimal $exchangeRate;

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
    public ?\postPeriodInCustomerCreditNoteUpdateDto $postPeriod;

    #[Property]
    public ?\financialPeriodInCustomerCreditNoteUpdateDto $financialPeriod;

    #[Property]
    public ?\DtoValueOfString $invoiceText;

    #[Property]
    public ?\DtoValueOfString $locationId;

    #[Property]
    public ?\salesPersonIDInCustomerCreditNoteUpdateDto $salesPersonId;

    #[Property]
    public ?\salespersonInCustomerCreditNoteUpdateDto $salesperson;

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
