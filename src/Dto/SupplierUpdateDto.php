<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
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
        public ?string $chargeBearer = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $accountUsedForPayment = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $paymentBy = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\AddressUpdateDto $mainAddress = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\ContactInfoUpdateDto $mainContact = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\AddressUpdateDto $remitAddress = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\ContactInfoUpdateDto $remitContact = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\AddressUpdateDto $supplierAddress = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\ContactInfoUpdateDto $supplierContact = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\SupplierGlAccountsUpdateDto $glAccounts = null,
        public ?array $supplierPaymentMethodDetails = null,
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
