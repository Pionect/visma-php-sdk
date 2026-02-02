<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a customer in CustomerController. Used by getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerDtoFactory testFactory()
 */
class CustomerDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
        public ?string $status = null,
        public ?MainAddressInCustomerDto $mainAddress = null,
        public ?MainContactInCustomerDto $mainContact = null,
        public ?string $accountReference = null,
        public ?ParentRecordDto $parentRecord = null,
        public ?CustomerClassInCustomerDto $customerClass = null,
        public ?CreditTermsInCustomerDto $creditTerms = null,
        public ?string $currencyId = null,
        public ?string $creditVerification = null,
        public int|float|null $creditLimit = null,
        public ?int $creditDaysPastDue = null,
        public ?InvoiceAddressInCustomerDto $invoiceAddress = null,
        public ?InvoiceContactInCustomerDto $invoiceContact = null,
        public ?bool $printInvoices = null,
        public ?bool $acceptAutoInvoices = null,
        public ?bool $sendInvoicesByEmail = null,
        #[MapName('sendDunningLettersViaEMail')]
        public ?bool $sendDunningLettersViaEmail = null,
        public ?bool $printDunningLetters = null,
        public ?bool $printStatements = null,
        public ?bool $sendStatementsByEmail = null,
        public ?bool $printMultiCurrencyStatements = null,
        public ?string $statementType = null,
        public ?DeliveryAddressInCustomerDto $deliveryAddress = null,
        public ?DeliveryContactInCustomerDto $deliveryContact = null,
        public ?string $vatRegistrationId = null,
        public ?string $corporateId = null,
        public ?string $gln = null,
        public ?VatZoneInCustomerDto $vatZone = null,
        public ?LocationInCustomerDto $location = null,
        public ?array $attributes = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?\Carbon\Carbon $createdDateTime = null,
        public ?array $directDebitLines = null,
        public ?PriceClassInCustomerDto $priceClass = null,
        public ?GlAccountsInCustomerDto $glAccounts = null,
        public ?bool $invoiceToDefaultLocation = null,
        public ?EInvoiceContractInCustomerDto $eInvoiceContract = null,
        public ?array $paymentMethods = null,
        public ?string $defaultPaymentMethodId = null,
        public ?int $numberOfEmployees = null,
        public ?bool $excludeDebtCollection = null,
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
