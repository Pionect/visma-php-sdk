<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerUpdateDtoFactory factory()
 */
class CustomerUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $number;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $name;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $status;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $accountReference;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $numberOfEmployees;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $parentRecordNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $currencyId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $creditLimit;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $creditDaysPastDue;

    #[Property]
    public ?bool $overrideWithClassValues;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $customerClassId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $creditTermsId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $printInvoices;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $acceptAutoInvoices;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $sendInvoicesByEmail;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $sendDunningLettersViaEmail;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $printDunningLetters;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $printStatements;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $sendStatementsByEmail;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $printMultiCurrencyStatements;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $invoiceToDefaultLocation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $vatRegistrationId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $corporateId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $vatZoneId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $gln;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $note;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?AddressUpdateDto $mainAddress;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?ContactInfoUpdateDto $mainContact;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $creditVerification;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?AddressUpdateDto $invoiceAddress;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?ContactInfoUpdateDto $invoiceContact;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $statementType;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?AddressUpdateDto $deliveryAddress;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?ContactInfoUpdateDto $deliveryContact;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $priceClassId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?EInvoiceContractUpdateDto $eInvoiceContract;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?CustomerDefaultPaymentMethodUpdateDto $defaultPaymentMethod;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?CustomerGlAccountsUpdateDto $glAccounts;

    /** Update direct debit information for a customer(only for Netherlands) */
    #[Property]
    public ?array $directDebitLines;

    #[Property]
    public ?array $attributeLines;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $overrideNumberSeries;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $excludeDebtCollection;
}
