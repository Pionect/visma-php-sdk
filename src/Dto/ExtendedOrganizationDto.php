<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * ExtendedOrganizationDto
 */
class ExtendedOrganizationDto extends Model
{
    /** Organization Cd */
    #[Property]
    public ?string $organizationCd;

    /** Name */
    #[Property]
    public ?string $name;

    /** Organization Type */
    #[Property]
    public ?string $organizationType;

    /** File Tax By Branches */
    #[Property]
    public ?bool $fileTaxByBranches;

    /** Base Currency */
    #[Property]
    public ?string $baseCurrency;

    #[Property]
    public ?mainAddressInExtendedOrganizationDto $mainAddress;

    #[Property]
    public ?mainContactInExtendedOrganizationDto $mainContact;

    #[Property]
    public ?deliveryAddressInExtendedOrganizationDto $deliveryAddress;

    #[Property]
    public ?deliveryContactInExtendedOrganizationDto $deliveryContact;

    /** CorporateId */
    #[Property]
    public ?string $corporateId;

    /** VatRegistrationId */
    #[Property]
    public ?string $vatRegistrationId;

    #[Property]
    public ?defaultCountryInExtendedOrganizationDto $defaultCountry;

    #[Property]
    public ?industryCodeInExtendedOrganizationDto $industryCode;

    #[Property]
    public ?currencyInExtendedOrganizationDto $currency;

    #[Property]
    public ?vatZoneInExtendedOrganizationDto $vatZone;

    /** LastModifiedDateTime */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?ledgerInExtendedOrganizationDto $ledger;

    #[Property]
    public ?bankSettingsInExtendedOrganizationDto $bankSettings;

    /** Branches */
    #[Property]
    public ?array $branches;

    /**
     * Identifier that represents a specific version of the resource.
     * It helps to prevent simultaneous updates of the resource from overwriting each other (by using ETags and If-Match headers)
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;
}
