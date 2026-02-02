<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\BranchQueryParametersFactory testFactory()
 */
class BranchQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $greaterThanValue = null,
        public ?string $orderBy = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $lastModifiedDateTimeCondition = null,
        public ?bool $expandAddress = null,
        public ?bool $expandContact = null,
        public ?bool $expandCurrency = null,
        public ?bool $expandVatZone = null,
        public ?bool $expandLedger = null,
        public ?bool $expandIndustryCode = null,
        public ?bool $expandDeliveryAddress = null,
        public ?bool $expandDeliveryContact = null,
        public ?bool $expandDefaultCountry = null,
        public ?bool $expandBankSettings = null,
    ) {}
}
