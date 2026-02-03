<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CustomerUpdateDtoFactory testFactory()
 */
class CustomerUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $number = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $name = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $status = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $accountReference = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $numberOfEmployees = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $parentRecordNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $currencyId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $creditLimit = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $creditDaysPastDue = null,
        public ?bool $overrideWithClassValues = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customerClassId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $creditTermsId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $printInvoices = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $acceptAutoInvoices = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $sendInvoicesByEmail = null,
        #[MapName('sendDunningLettersViaEMail'), WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $sendDunningLettersViaEmail = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $printDunningLetters = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $printStatements = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $sendStatementsByEmail = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $printMultiCurrencyStatements = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $invoiceToDefaultLocation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $vatRegistrationId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $corporateId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $vatZoneId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $gln = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $note = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?AddressUpdateDto $mainAddress = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?ContactInfoUpdateDto $mainContact = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $creditVerification = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?AddressUpdateDto $invoiceAddress = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?ContactInfoUpdateDto $invoiceContact = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $statementType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?AddressUpdateDto $deliveryAddress = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?ContactInfoUpdateDto $deliveryContact = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $priceClassId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?EinvoiceContractUpdateDto $eInvoiceContract = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?CustomerDefaultPaymentMethodUpdateDto $defaultPaymentMethod = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?CustomerGlAccountsUpdateDto $glAccounts = null,
        /** @var CustomerDirectDebitUpdateDto[]|null */
        public ?array $directDebitLines = null,
        /** @var AttributeLineUpdateDto[]|null */
        public ?array $attributeLines = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $overrideNumberSeries = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $excludeDebtCollection = null,
    ) {}
}
