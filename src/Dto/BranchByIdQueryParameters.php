<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\BranchByIdQueryParametersFactory testFactory()
 */
class BranchByIdQueryParameters extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\BranchByIdQueryParametersFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** True to get main address for branch. */
        public ?bool $expandAddress = null,
        /** True to get main contact for a branch. */
        public ?bool $expandContact = null,
        /** True to get base currency for a branch. */
        public ?bool $expandCurrency = null,
        /** True to get vat zone for a branch. */
        public ?bool $expandVatZone = null,
        /** True to get ledger for a branch. */
        public ?bool $expandLedger = null,
        /** True to get industry code for a branch. */
        public ?bool $expandIndustryCode = null,
        /** True to get delivery address for a branch. */
        public ?bool $expandDeliveryAddress = null,
        /** True to get delivery contact for a branch. */
        public ?bool $expandDeliveryContact = null,
        /** True to get default country for a branch. */
        public ?bool $expandDefaultCountry = null,
        /** True to get payment settings for Branch. */
        public ?bool $expandBankSettings = null,
    ) {}
}
