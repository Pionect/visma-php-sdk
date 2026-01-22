<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CreditNoteUpdateDto extends Model
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
    public ?array $invoiceLines;

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
    public ?\postPeriodInCreditNoteUpdateDto $postPeriod;

    #[Property]
    public ?\financialPeriodInCreditNoteUpdateDto $financialPeriod;

    #[Property]
    public ?\DtoValueOfString $invoiceText;

    #[Property]
    public ?\DtoValueOfString $locationId;

    #[Property]
    public ?\salesPersonIDInCreditNoteUpdateDto $salesPersonId;

    #[Property]
    public ?\salespersonInCreditNoteUpdateDto $salesperson;

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
