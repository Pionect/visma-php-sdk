<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represents a supplier in SupplierController. Used to create and update supplier.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierUpdateDtoFactory factory()
 */
class SupplierUpdateDto extends Model
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
    public ?string $supplierClassId;

    #[Property]
    public ?bool $overrideWithClassValues;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $creditTermsId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $documentLanguage;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $currencyId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $currencyOverride;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $currencyRateOverride;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $paymentMethodId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $cashAccount;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $paymentLeadTime;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $paymentRefDisplayMask;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $paySeparately;

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
    public ?string $chargeBearer;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $accountUsedForPayment;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $paymentBy;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?AddressUpdateDto $mainAddress;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?ContactInfoUpdateDto $mainContact;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?AddressUpdateDto $remitAddress;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?ContactInfoUpdateDto $remitContact;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?AddressUpdateDto $supplierAddress;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?ContactInfoUpdateDto $supplierContact;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?SupplierGlAccountsUpdateDto $glAccounts;

    #[Property]
    public ?array $supplierPaymentMethodDetails;

    #[Property]
    public ?array $attributeLines;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $retainageCashAccountId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $retainageApply;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $retainagePct;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $note;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $overrideNumberSeries;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $naceCode;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $landedCostSupplier;
}
