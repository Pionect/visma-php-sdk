<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\EmployeeStatusEnum;
use Pionect\VismaSdk\Enums\SupplierAccountUsedForPaymentEnum;
use Pionect\VismaSdk\Enums\SupplierChargeBearerEnum;
use Pionect\VismaSdk\Enums\SupplierPaymentByEnum;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a supplier in SupplierController. Used by getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierDtoFactory testFactory()
 */
class SupplierDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SupplierDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        /**
         * Mandatory field: The top part > Supplier ID* > The ID of the supplier
         * account.
         */
        public ?string $number = null,
        /**
         * Mandatory field: The top part > Supplier name* > The name of the supplier to
         * appear in the system, which may be a trade name or a doing-business-as (DBA)
         * name.
         */
        public ?string $name = null,
        /** Mandatory field: The top part > Status* > The status of the supplier account. */
        public ?EmployeeStatusEnum $status = null,
        public ?MainAddressInSupplierDto $mainAddress = null,
        public ?MainContactInSupplierDto $mainContact = null,
        /**
         * General information tab > Main contact section > Account ref. > An optional
         * text field that can contain a reference to your company's account number in
         * the supplier's system.
         */
        public ?string $accountReference = null,
        public ?ParentRecordInSupplierDto $parentRecord = null,
        public ?SupplierClassInSupplierDto $supplierClass = null,
        public ?CreditTermsInSupplierDto $creditTerms = null,
        /**
         * General information tab > Financial settings section > Document language >
         * The language of the documents to be printed to the suppliers of the class.
         */
        public ?string $documentLanguage = null,
        /**
         * General information tab > Financial settings section > Currency ID > The
         * currency that is used in operations with the supplier.
         */
        public ?string $currencyId = null,
        public ?RemitAddressInSupplierDto $remitAddress = null,
        public ?RemitContactInSupplierDto $remitContact = null,
        public ?PaymentMethodInSupplierDto $paymentMethod = null,
        /**
         * Payment settings tab > Payment settings section > Cash account > The cash
         * account to be used for operations with the supplier. You must select a cash
         * account.
         */
        public ?string $cashAccount = null,
        /**
         * Payment settings tab > Payment settings section > Charge bearer > The party
         * that will pay possible expenses connected with the payment.
         */
        public ?SupplierChargeBearerEnum $chargeBearer = null,
        /**
         * Payment settings tab > Payment settings section > Account used for payment >
         * The bank account to be used for payments to the supplier.
         */
        public ?SupplierAccountUsedForPaymentEnum $accountUsedForPayment = null,
        /**
         * Payment settings tab > Payment settings section > Payment by > An option that
         * defines how to calculate the date when this supplier should be paid.
         */
        public ?SupplierPaymentByEnum $paymentBy = null,
        /**
         * Payment settings tab > Payment settings section > Payment lead time (days) >
         * The number of days required for the payment to be delivered to the supplier's
         * location.
         */
        public ?int $paymentLeadTime = null,
        /**
         * Payment settings tab > Payment settings section > Payment ref. display mask >
         * This is a rule (mask) for how the payment reference number will be displayed.
         */
        public ?string $paymentRefDisplayMask = null,
        /**
         * Payment settings tab > Payment settings section > Pay separately > A check
         * box that indicates (if selected) that each supplier document should be paid
         * by a separate payment.
         */
        public ?bool $paySeparately = null,
        public ?SupplierAddressInSupplierDto $supplierAddress = null,
        public ?SupplierContactInSupplierDto $supplierContact = null,
        public ?LocationInSupplierDto $location = null,
        /**
         * Purchase settings tab > Default location settings section > VAT registration
         * ID > The supplier's VAT registration ID associated with the location.
         */
        public ?string $vatRegistrationId = null,
        /**
         * Purchase settings tab > Default location settings section > National
         * insurance no. > The supplier’s national insurance number associated with
         * the location.
         */
        public ?string $corporateId = null,
        public ?VatZoneInSupplierDto $vatZone = null,
        public ?GlAccountsInSupplierDto $glAccounts = null,
        /**
         * @var AttributeIdValueDto[]|null
         *                                 Attributes tab >
         */
        public ?array $attributes = null,
        /** System generated information. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /**
         * @var SupplierPaymentMethodDetailDto[]|null
         *                                            This class represents a Payment Method Detail in SupplierController. Used to
         *                                            get data for SupplierPaymentMethodDetails of a Supplier.
         */
        public ?array $supplierPaymentMethodDetails = null,
        /**
         * Payment settings tab > Retainage settings section > Apply retainage > A check
         * box that indicates (if selected) that by default, invoices with retainage are
         * created for the supplier in the Purchase invoices window.
         */
        public ?bool $retainageApply = null,
        /**
         * Payment settings tab > Retainage settings section > Retainage cash account >
         * The cash account to be used to record retainages for this supplier.
         */
        #[MapName('retainageCashAccountID')]
        public ?string $retainageCashAccountId = null,
        /**
         * Payment settings tab > Retainage settings section > Retainage (%) > The
         * default percent to be retained in invoices for the supplier.
         */
        public int|float|null $retainagePct = null,
        public ?string $note = null,
        /**
         * Legal requirements that all companies with more than 250 employees keep track
         * of their business accounts
         */
        public ?int $numberOfEmployees = null,
        /**
         * General information tab > Main contact section > Industry Code ID > The
         * supplier's NACE code
         */
        public ?string $naceCode = null,
        /**
         * General information tab > SupplierProperties > Landed Cost Supplier >
         * Indicates if the supplier is a landed cost supplier or not
         */
        public ?bool $landedCostSupplier = null,
        /**
         * General information tab > Financial settings section > Enable currency
         * override
         */
        public ?bool $currencyOverride = null,
        /** General information tab > Financial settings section > Enable rate override */
        public ?bool $currencyRateOverride = null,
        /**
         * Identifier that represents a specific version of the resource.
         * It helps to prevent simultaneous updates of the resource from overwriting
         * each other (by using ETags and If-Match headers)
         */
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
