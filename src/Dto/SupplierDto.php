<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a supplier in SupplierController. Used by getting data.
 */
class SupplierDto extends Model
{
    #[Property]
    public ?int $internalId;

    /** Mandatory field: The top part &gt; Supplier ID* &gt; The ID of the supplier account. */
    #[Property]
    public ?string $number;

    /** Mandatory field: The top part &gt; Supplier name* &gt; The name of the supplier to appear in the system, which may be a trade name or a doing-business-as (DBA) name. */
    #[Property]
    public ?string $name;

    /** Mandatory field: The top part &gt; Status* &gt; The status of the supplier account. */
    #[Property]
    public ?string $status;

    #[Property]
    public ?\mainAddressInSupplierDto $mainAddress;

    #[Property]
    public ?\mainContactInSupplierDto $mainContact;

    /** General information tab &gt; Main contact section &gt; Account ref. &gt; An optional text field that can contain a reference to your company's account number in the supplier's system. */
    #[Property]
    public ?string $accountReference;

    #[Property]
    public ?\parentRecordInSupplierDto $parentRecord;

    #[Property]
    public ?\supplierClassInSupplierDto $supplierClass;

    #[Property]
    public ?\creditTermsInSupplierDto $creditTerms;

    /** General information tab &gt; Financial settings section &gt; Document language &gt; The language of the documents to be printed to the suppliers of the class. */
    #[Property]
    public ?string $documentLanguage;

    /** General information tab &gt; Financial settings section &gt; Currency ID &gt; The currency that is used in operations with the supplier. */
    #[Property]
    public ?string $currencyId;

    #[Property]
    public ?\remitAddressInSupplierDto $remitAddress;

    #[Property]
    public ?\remitContactInSupplierDto $remitContact;

    #[Property]
    public ?\paymentMethodInSupplierDto $paymentMethod;

    /** Payment settings tab &gt; Payment settings section &gt; Cash account &gt; The cash account to be used for operations with the supplier. You must select a cash account. */
    #[Property]
    public ?string $cashAccount;

    /** Payment settings tab &gt; Payment settings section &gt; Charge bearer &gt; The party that will pay possible expenses connected with the payment. */
    #[Property]
    public ?string $chargeBearer;

    /** Payment settings tab &gt; Payment settings section &gt; Account used for payment &gt; The bank account to be used for payments to the supplier. */
    #[Property]
    public ?string $accountUsedForPayment;

    /** Payment settings tab &gt; Payment settings section &gt; Payment by &gt; An option that defines how to calculate the date when this supplier should be paid. */
    #[Property]
    public ?string $paymentBy;

    /** Payment settings tab &gt; Payment settings section &gt; Payment lead time (days) &gt; The number of days required for the payment to be delivered to the supplier's location. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $paymentLeadTime;

    /** Payment settings tab &gt; Payment settings section &gt; Payment ref. display mask &gt; This is a rule (mask) for how the payment reference number will be displayed. */
    #[Property]
    public ?string $paymentRefDisplayMask;

    /** Payment settings tab &gt; Payment settings section &gt; Pay separately &gt; A check box that indicates (if selected) that each supplier document should be paid by a separate payment. */
    #[Property]
    public ?bool $paySeparately;

    #[Property]
    public ?\supplierAddressInSupplierDto $supplierAddress;

    #[Property]
    public ?\supplierContactInSupplierDto $supplierContact;

    #[Property]
    public ?\locationInSupplierDto $location;

    /** Purchase settings tab &gt; Default location settings section &gt; VAT registration ID &gt; The supplier's VAT registration ID associated with the location. */
    #[Property]
    public ?string $vatRegistrationId;

    /** Purchase settings tab &gt; Default location settings section &gt; National insurance no. &gt; The supplier’s national insurance number associated with the location. */
    #[Property]
    public ?string $corporateId;

    #[Property]
    public ?\vatZoneInSupplierDto $vatZone;

    #[Property]
    public ?\glAccountsInSupplierDto $glAccounts;

    /** Attributes tab &gt; */
    #[Property]
    public ?array $attributes;

    /** System generated information. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /** This class represents a Payment Method Detail in SupplierController. Used to get data for SupplierPaymentMethodDetails of a Supplier. */
    #[Property]
    public ?array $supplierPaymentMethodDetails;

    /** Payment settings tab &gt; Retainage settings section &gt; Apply retainage &gt; A check box that indicates (if selected) that by default, invoices with retainage are created for the supplier in the Purchase invoices window. */
    #[Property]
    public ?bool $retainageApply;

    /** Payment settings tab &gt; Retainage settings section &gt; Retainage cash account &gt; The cash account to be used to record retainages for this supplier. */
    #[Property]
    public ?string $retainageCashAccountId;

    /** Payment settings tab &gt; Retainage settings section &gt; Retainage (%) &gt; The default percent to be retained in invoices for the supplier. */
    #[Property]
    public ?float $retainagePct;

    #[Property]
    public ?string $note;

    /** Legal requirements that all companies with more than 250 employees keep track of their business accounts */
    #[Property]
    public ?int $numberOfEmployees;

    /** General information tab &gt; Main contact section &gt; Industry Code ID &gt; The supplier's NACE code */
    #[Property]
    public ?string $naceCode;

    /** General information tab &gt; SupplierProperties &gt; Landed Cost Supplier &gt; Indicates if the supplier is a landed cost supplier or not */
    #[Property]
    public ?bool $landedCostSupplier;

    /** General information tab &gt; Financial settings section &gt; Enable currency override */
    #[Property]
    public ?bool $currencyOverride;

    /** General information tab &gt; Financial settings section &gt; Enable rate override */
    #[Property]
    public ?bool $currencyRateOverride;

    /**
     * Identifier that represents a specific version of the resource.
     * It helps to prevent simultaneous updates of the resource from overwriting each other (by using ETags and If-Match headers)
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;

    #[Property]
    public ?string $errorInfo;

    #[Property]
    public ?\MetadataDto $metadata;
}
