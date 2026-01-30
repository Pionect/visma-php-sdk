<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * ExtendedOrganizationDto
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExtendedOrganizationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExtendedOrganizationDtoFactory testFactory()
 */
class ExtendedOrganizationDto extends Model
{
    public function __construct(
        public ?string $organizationCd = null,
        public ?string $name = null,
        public ?string $organizationType = null,
        public ?bool $fileTaxByBranches = null,
        public ?string $baseCurrency = null,
        public ?MainAddressInExtendedOrganizationDto $mainAddress = null,
        public ?MainContactInExtendedOrganizationDto $mainContact = null,
        public ?DeliveryAddressInExtendedOrganizationDto $deliveryAddress = null,
        public ?DeliveryContactInExtendedOrganizationDto $deliveryContact = null,
        public ?string $corporateId = null,
        public ?string $vatRegistrationId = null,
        public ?DefaultCountryInExtendedOrganizationDto $defaultCountry = null,
        public ?IndustryCodeInExtendedOrganizationDto $industryCode = null,
        public ?CurrencyInExtendedOrganizationDto $currency = null,
        public ?VatZoneInExtendedOrganizationDto $vatZone = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?LedgerInExtendedOrganizationDto $ledger = null,
        public ?BankSettingsInExtendedOrganizationDto $bankSettings = null,
        public ?array $branches = null,
        public ?string $timeStamp = null,
    ) {}
}
