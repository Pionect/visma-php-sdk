<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\EmployeeStatusEnum;
use Pionect\VismaSdk\Enums\SupplierAccountUsedForPaymentEnum;
use Pionect\VismaSdk\Enums\SupplierChargeBearerEnum;
use Pionect\VismaSdk\Enums\SupplierPaymentByEnum;
use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a supplier in SupplierController. Used to create and update supplier.
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierUpdateDtoFactory testFactory()
 */
class SupplierUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $number = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $name = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?EmployeeStatusEnum $status = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $accountReference = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $numberOfEmployees = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $parentRecordNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $supplierClassId = null,
        public ?bool $overrideWithClassValues = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $creditTermsId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $documentLanguage = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $currencyId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $currencyOverride = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $currencyRateOverride = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $paymentMethodId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $cashAccount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $paymentLeadTime = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $paymentRefDisplayMask = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $paySeparately = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $vatRegistrationId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $corporateId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $vatZoneId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?SupplierChargeBearerEnum $chargeBearer = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?SupplierAccountUsedForPaymentEnum $accountUsedForPayment = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?SupplierPaymentByEnum $paymentBy = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?AddressUpdateDto $mainAddress = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?ContactInfoUpdateDto $mainContact = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?AddressUpdateDto $remitAddress = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?ContactInfoUpdateDto $remitContact = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?AddressUpdateDto $supplierAddress = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?ContactInfoUpdateDto $supplierContact = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?SupplierGlAccountsUpdateDto $glAccounts = null,
        /** @var SupplierPaymentMethodDetailUpdateDto[]|null */
        public ?array $supplierPaymentMethodDetails = null,
        /** @var AttributeLineUpdateDto[]|null */
        public ?array $attributeLines = null,
        #[MapName('retainageCashAccountID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $retainageCashAccountId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $retainageApply = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $retainagePct = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $note = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $overrideNumberSeries = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $naceCode = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $landedCostSupplier = null,
    ) {}
}
