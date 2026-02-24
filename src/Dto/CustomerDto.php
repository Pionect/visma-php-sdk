<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\CustomerCreditVerificationEnum;
use Pionect\VismaSdk\Enums\CustomerStatementTypeEnum;
use Pionect\VismaSdk\Enums\CustomerStatusEnum;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a customer in CustomerController. Used by getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerDtoFactory testFactory()
 */
class CustomerDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CustomerDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        /**
         * Mandatory field: The top part > Customer ID* > The ID of the customer
         * account, which is defined by the BIZACCT segmented key or by the CUSTOMER
         * segmented key. When you are creating a new customer, you must specify an ID.
         */
        public ?string $number = null,
        /**
         * Mandatory field: The top part > Customer name* > The name of the customer to
         * appear in the system, which may be a trade name or a doing-business-as (DBA)
         * name.
         */
        public ?string $name = null,
        /**
         * Mandatory field: The top part > Status* > The status of the customer account.
         * You can select one of the following options: Active, On hold, Credit hold,
         * Inactive, One time.
         */
        public ?CustomerStatusEnum $status = null,
        public ?MainAddressInCustomerDto $mainAddress = null,
        public ?MainContactInCustomerDto $mainContact = null,
        /**
         * General information tab > Main contact section > Account ref. > Your
         * company's account number in the customer's system.
         */
        public ?string $accountReference = null,
        public ?ParentRecordDto $parentRecord = null,
        public ?CustomerClassInCustomerDto $customerClass = null,
        public ?CreditTermsInCustomerDto $creditTerms = null,
        /**
         * The General information tab > Financial settings section > Currency ID > The
         * currency used in operations with the customer, which you can select from the
         * list of currencies defined in the system.
         */
        public ?string $currencyId = null,
        /**
         * The General information tab > Credit verification rules > Credit verification
         * > The credit rule applied to this customer. The following options are
         * available: Days past due, Credit limit, Limit and days past due, disabled.
         */
        public ?CustomerCreditVerificationEnum $creditVerification = null,
        /**
         * The General information tab > Credit verification rules section > Credit
         * limit > The amount, if applicable, that serves as a credit limit for the
         * customer.
         */
        public int|float|null $creditLimit = null,
        /**
         * General information tab > Credit verification rules section > Credit days
         * past due > The maximum number of days by which the customer payment may
         * exceed the invoice date.
         */
        public ?int $creditDaysPastDue = null,
        public ?InvoiceAddressInCustomerDto $invoiceAddress = null,
        public ?InvoiceContactInCustomerDto $invoiceContact = null,
        /**
         * Invoicing settings > Print and email settings section > Print invoices > A
         * check box that, if selected, indicates that invoices can be printed in the
         * Print invoice (AR508000) window.
         */
        public ?bool $printInvoices = null,
        /**
         * Invoicing settings > Print and email settings section > Send invoices to
         * AutoInvoice > Select this check box if you are using AutoInvoice and want to
         * send invoices directly to this service.
         */
        public ?bool $acceptAutoInvoices = null,
        /**
         * Invoicing settings > Print and email settings section > Send invoices by
         * email > A check box that, if selected, indicates that you can send invoices
         * by email by using the Print invoices (AR508000) window.
         */
        public ?bool $sendInvoicesByEmail = null,
        /**
         * Invoicing settings > Print and email settings section > Print statements > A
         * check box that, if selected, indicates that statements can be printed in the
         * Print statements (AR503500) window.
         */
        #[MapName('sendDunningLettersViaEMail')]
        public ?bool $sendDunningLettersViaEmail = null,
        /**
         * Invoicing settings > Email settings section > A check box that, if selected,
         * indicates that statements can be send to email (AR503500) window.
         */
        public ?bool $printDunningLetters = null,
        /**
         * Invoicing settings > Print settings section > A check box that, if selected,
         * indicates that statements can be printed in the to email (AR503500) window.
         */
        public ?bool $printStatements = null,
        /**
         * Invoicing settings > Print and email settings section > Send statement by
         * email > A check box that, if selected, indicates that statements can be sent
         * by email to customers of the class in the Print statements  (AR503500)
         * window.
         */
        public ?bool $sendStatementsByEmail = null,
        /**
         * Invoicing settings > Print and email settings section > Multi-currency
         * statements > A check box that indicates (if selected) that this customer's
         * statements must be printed in multi-currency format.
         */
        public ?bool $printMultiCurrencyStatements = null,
        /**
         * Invoicing settings > Print and email settings section > Statement type > The
         * statement type used by default in relations with the customer, which can be
         * one of the following: Open item, Balance brought forward.
         */
        public ?CustomerStatementTypeEnum $statementType = null,
        public ?DeliveryAddressInCustomerDto $deliveryAddress = null,
        public ?DeliveryContactInCustomerDto $deliveryContact = null,
        /**
         * Deliver settings tab > Default location settings section > VAT registration
         * ID > The customer's taxpayer ID associated with the location.
         */
        public ?string $vatRegistrationId = null,
        /**
         * Delivery settings tab > Default location settings section > Corporate ID >
         * The customers company ID, associated with the location.
         */
        public ?string $corporateId = null,
        /**
         * Delivery settings tab > Default location settings section > GLN > The Global
         * Location Number, associated with the location.
         */
        public ?string $gln = null,
        public ?VatZoneInCustomerDto $vatZone = null,
        public ?LocationInCustomerDto $location = null,
        /**
         * @var AttributeIdValueDto[]|null
         *                                 Information collected from the system. Not visible on the screen.
         */
        public ?array $attributes = null,
        /** Information collected from the system. Not visible on the screen. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /** Information collected from the system. Not visible on the screen. */
        public ?\Carbon\Carbon $createdDateTime = null,
        /**
         * @var CustomerDirectDebitDto[]|null
         *                                    Information collected from the system. Not visible on the screen.
         */
        public ?array $directDebitLines = null,
        public ?PriceClassInCustomerDto $priceClass = null,
        public ?GlAccountsInCustomerDto $glAccounts = null,
        /**
         * Delivery settings tab > Default location settings > Invoice to default
         * location > A check box indicating that the default location is to be used.
         */
        public ?bool $invoiceToDefaultLocation = null,
        public ?EInvoiceContractInCustomerDto $eInvoiceContract = null,
        /**
         * @var CustomerPaymentMethodInfoDto[]|null
         *                                          Payment methods tab.
         */
        public ?array $paymentMethods = null,
        /**
         * Invoicing settings tab > Default payment method section > The default payment
         * method.
         */
        public ?string $defaultPaymentMethodId = null,
        /**
         * Legal requirements that all companies with more than 250 employees keep track
         * of their business accounts
         */
        public ?int $numberOfEmployees = null,
        /** Exclude Debt Collection for Autocollect */
        public ?bool $excludeDebtCollection = null,
        /**
         * Identifier that represents a specific version of the resource.
         * It helps to prevent simultaneous updates of the resource from overwriting
         * each other (by using ETags and If-Match headers)
         */
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
