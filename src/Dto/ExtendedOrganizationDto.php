<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * ExtendedOrganizationDto
 *
 * @method static \Pionect\VismaSdk\Factories\ExtendedOrganizationDtoFactory testFactory()
 */
class ExtendedOrganizationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Organization Cd */
        public ?string $organizationCd = null,
        /** Name */
        public ?string $name = null,
        /** Organization Type */
        public ?string $organizationType = null,
        /** File Tax By Branches */
        public ?bool $fileTaxByBranches = null,
        /** Base Currency */
        public ?string $baseCurrency = null,
        public ?MainAddressInExtendedOrganizationDto $mainAddress = null,
        public ?MainContactInExtendedOrganizationDto $mainContact = null,
        public ?DeliveryAddressInExtendedOrganizationDto $deliveryAddress = null,
        public ?DeliveryContactInExtendedOrganizationDto $deliveryContact = null,
        /** CorporateId */
        public ?string $corporateId = null,
        /** VatRegistrationId */
        public ?string $vatRegistrationId = null,
        public ?DefaultCountryInExtendedOrganizationDto $defaultCountry = null,
        public ?IndustryCodeInExtendedOrganizationDto $industryCode = null,
        public ?CurrencyInExtendedOrganizationDto $currency = null,
        public ?VatZoneInExtendedOrganizationDto $vatZone = null,
        /** LastModifiedDateTime */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?LedgerInExtendedOrganizationDto $ledger = null,
        public ?BankSettingsInExtendedOrganizationDto $bankSettings = null,
        /**
         * @var BranchNumberDto[]|null
         *                             Branches
         */
        public ?array $branches = null,
        /**
         * Identifier that represents a specific version of the resource.
         * It helps to prevent simultaneous updates of the resource from overwriting
         * each other (by using ETags and If-Match headers)
         */
        public ?string $timeStamp = null,
    ) {}
}
