<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a supplier in SupplierController. Used by getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierDtoFactory testFactory()
 */
class SupplierDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
        public ?string $status = null,
        public ?MainAddressInSupplierDto $mainAddress = null,
        public ?MainContactInSupplierDto $mainContact = null,
        public ?string $accountReference = null,
        public ?ParentRecordInSupplierDto $parentRecord = null,
        public ?SupplierClassInSupplierDto $supplierClass = null,
        public ?CreditTermsInSupplierDto $creditTerms = null,
        public ?string $documentLanguage = null,
        public ?string $currencyId = null,
        public ?RemitAddressInSupplierDto $remitAddress = null,
        public ?RemitContactInSupplierDto $remitContact = null,
        public ?PaymentMethodInSupplierDto $paymentMethod = null,
        public ?string $cashAccount = null,
        public ?string $chargeBearer = null,
        public ?string $accountUsedForPayment = null,
        public ?string $paymentBy = null,
        public ?int $paymentLeadTime = null,
        public ?string $paymentRefDisplayMask = null,
        public ?bool $paySeparately = null,
        public ?SupplierAddressInSupplierDto $supplierAddress = null,
        public ?SupplierContactInSupplierDto $supplierContact = null,
        public ?LocationInSupplierDto $location = null,
        public ?string $vatRegistrationId = null,
        public ?string $corporateId = null,
        public ?VatZoneInSupplierDto $vatZone = null,
        public ?GlAccountsInSupplierDto $glAccounts = null,
        public ?array $attributes = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?array $supplierPaymentMethodDetails = null,
        public ?bool $retainageApply = null,
        #[MapName('retainageCashAccountID')]
        public ?string $retainageCashAccountId = null,
        public int|float|null $retainagePct = null,
        public ?string $note = null,
        public ?int $numberOfEmployees = null,
        public ?string $naceCode = null,
        public ?bool $landedCostSupplier = null,
        public ?bool $currencyOverride = null,
        public ?bool $currencyRateOverride = null,
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
