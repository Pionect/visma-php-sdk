<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\BranchDtoFactory testFactory()
 */
class BranchDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The top part > Branch ID* > The unique identifier of the Branch */
        public ?int $branchId = null,
        /**
         * Mandatory field: The top part > Branch CD* > The branch number , which you
         * compose according to the rules defined by the BIZACCT segmented key.
         */
        public ?string $number = null,
        /** The top part > Company name > The name of the company. */
        public ?string $name = null,
        public ?int $organizationId = null,
        /**
         * The top part > Is main organisation > If you want this company to be the main
         * company of your branches, select this check box.
         */
        public ?bool $isMainBranch = null,
        /** The top part > Is active branch. */
        public ?bool $isActive = null,
        /** System generated information. This information is not visible in the window. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /**
         * The Organisation details tab > VAT registration info section > Corporate ID >
         * The corporate ID of the company.
         */
        public ?string $corporateId = null,
        /**
         * The Organisation details tab > VAT registration info section > VAT
         * registration ID > The company registration ID for the country’s tax
         * authority.
         */
        public ?string $vatRegistrationId = null,
        public ?MainAddressInBranchDto $mainAddress = null,
        public ?MainContactInBranchDto $mainContact = null,
        public ?DeliveryAddressInBranchDto $deliveryAddress = null,
        public ?DeliveryContactInBranchDto $deliveryContact = null,
        public ?DefaultCountryInBranchDto $defaultCountry = null,
        public ?IndustryCodeInBranchDto $industryCode = null,
        public ?CurrencyInBranchDto $currency = null,
        public ?VatZoneInBranchDto $vatZone = null,
        public ?LedgerInBranchDto $ledger = null,
        public ?BankSettingsInBranchDto $bankSettings = null,
    ) {}
}
