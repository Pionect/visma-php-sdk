<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Bank Settings
 *
 * @method static \Pionect\VismaSdk\Factories\BankSettingsInExtendedOrganizationDtoFactory testFactory()
 */
class BankSettingsInExtendedOrganizationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
