<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CustomerInvoiceUpdateDto extends Model
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
    public ?\DtoValueOfString $customerProject;

    #[Property]
    public ?\DtoValueOfDecimal $exchangeRate;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $domesticServicesDeductibleDocument;

    #[Property]
    public ?\RotRutUpdateDto $rotRutDetails;

    #[Property]
    public ?\DtoValueOfString $paymentReference;

    #[Property]
    public ?\DtoValueOfNullableOfInt32 $contact;

    #[Property]
    public ?\DtoValueOfString $project;

    #[Property]
    public ?array $taxDetailLines;

    #[Property]
    public ?array $invoiceLines;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $sendToAutoInvoice;

    #[Property]
    public ?\DtoValueOfString $customerVatZoneId;

    #[Property]
    public ?\DtoValueOfSalesInvoiceAddressUpdateDto $billingAddress;

    #[Property]
    public ?\DtoValueOfSalesInvoiceContactUpdateDto $invoiceContact;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $startDate;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $endDate;

    #[Property]
    public ?\DtoValueOfString $accountingCostRef;

    #[Property]
    public ?\DtoValueOfString $originatorDocRef;

    #[Property]
    public ?\DtoValueOfString $contractDocRef;

    #[Property]
    public ?\DtoValueOfBoolean $revoked;

    #[Property]
    public ?\overrideNumberSeriesInCustomerInvoiceUpdateDto $overrideNumberSeries;

    #[Property]
    public ?\DtoValueOfNullableOfGuid $directDebitMandateId;

    #[Property]
    public ?\DtoValueOfBoolean $excludeDebtCollection;

    #[Property]
    public ?\DtoValueOfString $debtCollectionCaseNbr;

    #[Property]
    public ?\DtoValueOfString $debtCollectionCaseStatus;

    #[Property]
    public ?\DtoValueOfString $debtCollectionCaseType;

    #[Property]
    public ?\DtoValueOfString $debtCollectionCaseUrl;

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
    public ?\postPeriodInCustomerInvoiceUpdateDto $postPeriod;

    #[Property]
    public ?\financialPeriodInCustomerInvoiceUpdateDto $financialPeriod;

    #[Property]
    public ?\DtoValueOfString $invoiceText;

    #[Property]
    public ?\DtoValueOfString $locationId;

    #[Property]
    public ?\salesPersonIDInCustomerInvoiceUpdateDto $salesPersonId;

    #[Property]
    public ?\salespersonInCustomerInvoiceUpdateDto $salesperson;

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
