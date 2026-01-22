<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CustomerUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $number;

    #[Property]
    public ?\DtoValueOfString $name;

    #[Property]
    public ?\DtoValueOfCustomerStatus $status;

    #[Property]
    public ?\DtoValueOfString $accountReference;

    #[Property]
    public ?\DtoValueOfNullableOfInt32 $numberOfEmployees;

    #[Property]
    public ?\DtoValueOfString $parentRecordNumber;

    #[Property]
    public ?\DtoValueOfString $currencyId;

    #[Property]
    public ?\DtoValueOfDecimal $creditLimit;

    #[Property]
    public ?\DtoValueOfNullableOfInt16 $creditDaysPastDue;

    #[Property]
    public ?bool $overrideWithClassValues;

    #[Property]
    public ?\DtoValueOfString $customerClassId;

    #[Property]
    public ?\DtoValueOfString $creditTermsId;

    #[Property]
    public ?\DtoValueOfBoolean $printInvoices;

    #[Property]
    public ?\DtoValueOfBoolean $acceptAutoInvoices;

    #[Property]
    public ?\DtoValueOfBoolean $sendInvoicesByEmail;

    #[Property]
    public ?\DtoValueOfBoolean $sendDunningLettersViaEmail;

    #[Property]
    public ?\DtoValueOfBoolean $printDunningLetters;

    #[Property]
    public ?\DtoValueOfBoolean $printStatements;

    #[Property]
    public ?\DtoValueOfBoolean $sendStatementsByEmail;

    #[Property]
    public ?\DtoValueOfBoolean $printMultiCurrencyStatements;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $invoiceToDefaultLocation;

    #[Property]
    public ?\DtoValueOfString $vatRegistrationId;

    #[Property]
    public ?\DtoValueOfString $corporateId;

    #[Property]
    public ?\DtoValueOfString $vatZoneId;

    #[Property]
    public ?\DtoValueOfString $gln;

    #[Property]
    public ?\DtoValueOfString $note;

    #[Property]
    public ?\DtoValueOfAddressUpdateDto $mainAddress;

    #[Property]
    public ?\DtoValueOfContactInfoUpdateDto $mainContact;

    #[Property]
    public ?\DtoValueOfCreditRule $creditVerification;

    #[Property]
    public ?\DtoValueOfAddressUpdateDto $invoiceAddress;

    #[Property]
    public ?\DtoValueOfContactInfoUpdateDto $invoiceContact;

    #[Property]
    public ?\DtoValueOfStatementTypes $statementType;

    #[Property]
    public ?\DtoValueOfAddressUpdateDto $deliveryAddress;

    #[Property]
    public ?\DtoValueOfContactInfoUpdateDto $deliveryContact;

    #[Property]
    public ?\DtoValueOfString $priceClassId;

    #[Property]
    public ?\DtoValueOfEInvoiceContractUpdateDto $eInvoiceContract;

    #[Property]
    public ?\DtoValueOfCustomerDefaultPaymentMethodUpdateDto $defaultPaymentMethod;

    #[Property]
    public ?\DtoValueOfCustomerGlAccountsUpdateDto $glAccounts;

    /** Update direct debit information for a customer(only for Netherlands) */
    #[Property]
    public ?array $directDebitLines;

    #[Property]
    public ?array $attributeLines;

    #[Property]
    public ?\DtoValueOfBoolean $overrideNumberSeries;

    #[Property]
    public ?\DtoValueOfBoolean $excludeDebtCollection;
}
