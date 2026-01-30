<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchQueryParametersFactory factory()
 */
class BranchQueryParameters extends Model
{
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
