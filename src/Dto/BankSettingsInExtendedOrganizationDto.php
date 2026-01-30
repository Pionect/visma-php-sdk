<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Bank Settings
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BankSettingsInExtendedOrganizationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BankSettingsInExtendedOrganizationDtoFactory factory()
 */
class BankSettingsInExtendedOrganizationDto extends Model
{
    public function __construct(
        public ?string $bankName = null,
        public ?string $bankAddress1 = null,
        public ?string $bankAddress2 = null,
        public ?string $bankAddress3 = null,
        public ?string $bankCountry = null,
        public ?string $iban = null,
        public ?string $bban = null,
        public ?string $bbaN2 = null,
        public ?string $bbaN3 = null,
        public ?string $bic = null,
        public ?string $creditorId = null,
    ) {}
}
