<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a supplier in SupplierController. Used to create and update supplier.
 */
class SupplierUpdateDto extends Model
{
    #[Property]
    public ?\DtoValueOfString $number;

    #[Property]
    public ?\DtoValueOfString $name;

    #[Property]
    public ?\DtoValueOfSupplierStatus $status;

    #[Property]
    public ?\DtoValueOfString $accountReference;

    #[Property]
    public ?\DtoValueOfNullableOfInt32 $numberOfEmployees;

    #[Property]
    public ?\DtoValueOfString $parentRecordNumber;

    #[Property]
    public ?\DtoValueOfString $supplierClassId;

    #[Property]
    public ?bool $overrideWithClassValues;

    #[Property]
    public ?\DtoValueOfString $creditTermsId;

    #[Property]
    public ?\DtoValueOfString $documentLanguage;

    #[Property]
    public ?\DtoValueOfString $currencyId;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $currencyOverride;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $currencyRateOverride;

    #[Property]
    public ?\DtoValueOfString $paymentMethodId;

    #[Property]
    public ?\DtoValueOfString $cashAccount;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $paymentLeadTime;

    #[Property]
    public ?\DtoValueOfString $paymentRefDisplayMask;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $paySeparately;

    #[Property]
    public ?\DtoValueOfString $vatRegistrationId;

    #[Property]
    public ?\DtoValueOfString $corporateId;

    #[Property]
    public ?\DtoValueOfString $vatZoneId;

    #[Property]
    public ?\DtoValueOfSupplierChargeBearer $chargeBearer;

    #[Property]
    public ?\DtoValueOfAccountUsedForPayment $accountUsedForPayment;

    #[Property]
    public ?\DtoValueOfPaymentBy $paymentBy;

    #[Property]
    public ?\DtoValueOfAddressUpdateDto $mainAddress;

    #[Property]
    public ?\DtoValueOfContactInfoUpdateDto $mainContact;

    #[Property]
    public ?\DtoValueOfAddressUpdateDto $remitAddress;

    #[Property]
    public ?\DtoValueOfContactInfoUpdateDto $remitContact;

    #[Property]
    public ?\DtoValueOfAddressUpdateDto $supplierAddress;

    #[Property]
    public ?\DtoValueOfContactInfoUpdateDto $supplierContact;

    #[Property]
    public ?\DtoValueOfSupplierGlAccountsUpdateDto $glAccounts;

    #[Property]
    public ?array $supplierPaymentMethodDetails;

    #[Property]
    public ?array $attributeLines;

    #[Property]
    public ?\DtoValueOfString $retainageCashAccountId;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $retainageApply;

    #[Property]
    public ?\DtoValueOfNullableOfDecimal $retainagePct;

    #[Property]
    public ?\DtoValueOfString $note;

    #[Property]
    public ?\DtoValueOfBoolean $overrideNumberSeries;

    #[Property]
    public ?\DtoValueOfString $naceCode;

    #[Property]
    public ?\DtoValueOfNullableOfBoolean $landedCostSupplier;
}
