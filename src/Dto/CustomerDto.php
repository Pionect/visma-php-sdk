<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a customer in CustomerController. Used by getting data.
 */
class CustomerDto extends Model
{
    #[Property]
    public ?int $internalId;

    /** Mandatory field: The top part &gt; Customer ID* &gt; The ID of the customer account, which is defined by the BIZACCT segmented key or by the CUSTOMER segmented key. When you are creating a new customer, you must specify an ID. */
    #[Property]
    public ?string $number;

    /** Mandatory field: The top part &gt; Customer name* &gt; The name of the customer to appear in the system, which may be a trade name or a doing-business-as (DBA) name. */
    #[Property]
    public ?string $name;

    /** Mandatory field: The top part &gt; Status* &gt; The status of the customer account. You can select one of the following options: Active, On hold, Credit hold, Inactive, One time. */
    #[Property]
    public ?string $status;

    #[Property]
    public ?mainAddressInCustomerDto $mainAddress;

    #[Property]
    public ?mainContactInCustomerDto $mainContact;

    /** General information tab &gt; Main contact section &gt; Account ref. &gt; Your company's account number in the customer's system. */
    #[Property]
    public ?string $accountReference;

    #[Property]
    public ?ParentRecordDto $parentRecord;

    #[Property]
    public ?customerClassInCustomerDto $customerClass;

    #[Property]
    public ?creditTermsInCustomerDto $creditTerms;

    /** The General information tab &gt; Financial settings section &gt; Currency ID &gt; The currency used in operations with the customer, which you can select from the list of currencies defined in the system. */
    #[Property]
    public ?string $currencyId;

    /** The General information tab &gt; Credit verification rules &gt; Credit verification &gt; The credit rule applied to this customer. The following options are available: Days past due, Credit limit, Limit and days past due, disabled. */
    #[Property]
    public ?string $creditVerification;

    /** The General information tab &gt; Credit verification rules section &gt; Credit limit &gt; The amount, if applicable, that serves as a credit limit for the customer. */
    #[Property]
    public ?float $creditLimit;

    /** General information tab &gt; Credit verification rules section &gt; Credit days past due &gt; The maximum number of days by which the customer payment may exceed the invoice date. */
    #[Property]
    public ?int $creditDaysPastDue;

    #[Property]
    public ?invoiceAddressInCustomerDto $invoiceAddress;

    #[Property]
    public ?invoiceContactInCustomerDto $invoiceContact;

    /** Invoicing settings &gt; Print and email settings section &gt; Print invoices &gt; A check box that, if selected, indicates that invoices can be printed in the Print invoice (AR508000) window. */
    #[Property]
    public ?bool $printInvoices;

    /** Invoicing settings &gt; Print and email settings section &gt; Send invoices to AutoInvoice &gt; Select this check box if you are using AutoInvoice and want to send invoices directly to this service. */
    #[Property]
    public ?bool $acceptAutoInvoices;

    /** Invoicing settings &gt; Print and email settings section &gt; Send invoices by email &gt; A check box that, if selected, indicates that you can send invoices by email by using the Print invoices (AR508000) window. */
    #[Property]
    public ?bool $sendInvoicesByEmail;

    /** Invoicing settings &gt; Print and email settings section &gt; Print statements &gt; A check box that, if selected, indicates that statements can be printed in the Print statements (AR503500) window. */
    #[Property]
    public ?bool $sendDunningLettersViaEmail;

    /** Invoicing settings &gt; Email settings section &gt; A check box that, if selected, indicates that statements can be send to email (AR503500) window. */
    #[Property]
    public ?bool $printDunningLetters;

    /** Invoicing settings &gt; Print settings section &gt; A check box that, if selected, indicates that statements can be printed in the to email (AR503500) window. */
    #[Property]
    public ?bool $printStatements;

    /** Invoicing settings &gt; Print and email settings section &gt; Send statement by email &gt; A check box that, if selected, indicates that statements can be sent by email to customers of the class in the Print statements  (AR503500) window. */
    #[Property]
    public ?bool $sendStatementsByEmail;

    /** Invoicing settings &gt; Print and email settings section &gt; Multi-currency statements &gt; A check box that indicates (if selected) that this customer's statements must be printed in multi-currency format. */
    #[Property]
    public ?bool $printMultiCurrencyStatements;

    /** Invoicing settings &gt; Print and email settings section &gt; Statement type &gt; The statement type used by default in relations with the customer, which can be one of the following: Open item, Balance brought forward. */
    #[Property]
    public ?string $statementType;

    #[Property]
    public ?deliveryAddressInCustomerDto $deliveryAddress;

    #[Property]
    public ?deliveryContactInCustomerDto $deliveryContact;

    /** Deliver settings tab &gt; Default location settings section &gt; VAT registration ID &gt; The customer's taxpayer ID associated with the location. */
    #[Property]
    public ?string $vatRegistrationId;

    /** Delivery settings tab &gt; Default location settings section &gt; Corporate ID &gt; The customers company ID, associated with the location. */
    #[Property]
    public ?string $corporateId;

    /** Delivery settings tab &gt; Default location settings section &gt; GLN &gt; The Global Location Number, associated with the location. */
    #[Property]
    public ?string $gln;

    #[Property]
    public ?vatZoneInCustomerDto $vatZone;

    #[Property]
    public ?locationInCustomerDto $location;

    /** Information collected from the system. Not visible on the screen. */
    #[Property]
    public ?array $attributes;

    /** Information collected from the system. Not visible on the screen. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /** Information collected from the system. Not visible on the screen. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $createdDateTime;

    /** Information collected from the system. Not visible on the screen. */
    #[Property]
    public ?array $directDebitLines;

    #[Property]
    public ?priceClassInCustomerDto $priceClass;

    #[Property]
    public ?glAccountsInCustomerDto $glAccounts;

    /** Delivery settings tab &gt; Default location settings &gt; Invoice to default location &gt; A check box indicating that the default location is to be used. */
    #[Property]
    public ?bool $invoiceToDefaultLocation;

    #[Property]
    public ?eInvoiceContractInCustomerDto $eInvoiceContract;

    /** Payment methods tab. */
    #[Property]
    public ?array $paymentMethods;

    /** Invoicing settings tab &gt; Default payment method section &gt; The default payment method. */
    #[Property]
    public ?string $defaultPaymentMethodId;

    /** Legal requirements that all companies with more than 250 employees keep track of their business accounts */
    #[Property]
    public ?int $numberOfEmployees;

    /** Exclude Debt Collection for Autocollect */
    #[Property]
    public ?bool $excludeDebtCollection;

    /**
     * Identifier that represents a specific version of the resource.
     * It helps to prevent simultaneous updates of the resource from overwriting each other (by using ETags and If-Match headers)
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;

    #[Property]
    public ?string $errorInfo;
}
