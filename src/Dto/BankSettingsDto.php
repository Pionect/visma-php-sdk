<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BankSettingsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BankSettingsDtoFactory testFactory()
 */
class BankSettingsDto extends Model
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
