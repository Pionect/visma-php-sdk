<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchDtoFactory testFactory()
 */
class BranchDto extends Model
{
    public function __construct(
        public ?int $branchId = null,
        public ?string $number = null,
        public ?string $name = null,
        public ?int $organizationId = null,
        public ?bool $isMainBranch = null,
        public ?bool $isActive = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $corporateId = null,
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
