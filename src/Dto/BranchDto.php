<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class BranchDto extends Model
{
    /** The top part &gt; Branch ID* &gt; The unique identifier of the Branch */
    #[Property]
    public ?int $branchId;

    /** Mandatory field: The top part &gt; Branch CD* &gt; The branch number , which you compose according to the rules defined by the BIZACCT segmented key. */
    #[Property]
    public ?string $number;

    /** The top part &gt; Company name &gt; The name of the company. */
    #[Property]
    public ?string $name;

    #[Property]
    public ?int $organizationId;

    /** The top part &gt; Is main organisation &gt; If you want this company to be the main company of your branches, select this check box. */
    #[Property]
    public ?bool $isMainBranch;

    /** The top part &gt; Is active branch. */
    #[Property]
    public ?bool $isActive;

    /** System generated information. This information is not visible in the window. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /** The Organisation details tab &gt; VAT registration info section &gt; Corporate ID &gt; The corporate ID of the company. */
    #[Property]
    public ?string $corporateId;

    /** The Organisation details tab &gt; VAT registration info section &gt; VAT registration ID &gt; The company registration ID for the country’s tax authority. */
    #[Property]
    public ?string $vatRegistrationId;

    #[Property]
    public ?mainAddressInBranchDto $mainAddress;

    #[Property]
    public ?mainContactInBranchDto $mainContact;

    #[Property]
    public ?deliveryAddressInBranchDto $deliveryAddress;

    #[Property]
    public ?deliveryContactInBranchDto $deliveryContact;

    #[Property]
    public ?defaultCountryInBranchDto $defaultCountry;

    #[Property]
    public ?industryCodeInBranchDto $industryCode;

    #[Property]
    public ?currencyInBranchDto $currency;

    #[Property]
    public ?vatZoneInBranchDto $vatZone;

    #[Property]
    public ?ledgerInBranchDto $ledger;

    #[Property]
    public ?bankSettingsInBranchDto $bankSettings;
}
