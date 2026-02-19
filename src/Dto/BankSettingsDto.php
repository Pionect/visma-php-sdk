<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\BankSettingsDtoFactory testFactory()
 */
class BankSettingsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Bank name */
        public ?string $bankName = null,
        /** Bank address1 */
        public ?string $bankAddress1 = null,
        /** BankAddress2 */
        public ?string $bankAddress2 = null,
        /** BankAddress3 */
        public ?string $bankAddress3 = null,
        /** BankCountry */
        public ?string $bankCountry = null,
        /** IBAN */
        public ?string $iban = null,
        /** BBAN */
        public ?string $bban = null,
        /** BBAN2 */
        public ?string $bbaN2 = null,
        /** BBAN3 */
        public ?string $bbaN3 = null,
        /** BIC */
        public ?string $bic = null,
        /** CreditorId */
        public ?string $creditorId = null,
    ) {}
}
