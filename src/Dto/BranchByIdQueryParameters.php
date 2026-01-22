<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class BranchByIdQueryParameters extends Model
{
    /** True to get main address for branch. */
    #[Property]
    public ?bool $expandAddress;

    /** True to get main contact for a branch. */
    #[Property]
    public ?bool $expandContact;

    /** True to get base currency for a branch. */
    #[Property]
    public ?bool $expandCurrency;

    /** True to get vat zone for a branch. */
    #[Property]
    public ?bool $expandVatZone;

    /** True to get ledger for a branch. */
    #[Property]
    public ?bool $expandLedger;

    /** True to get industry code for a branch. */
    #[Property]
    public ?bool $expandIndustryCode;

    /** True to get delivery address for a branch. */
    #[Property]
    public ?bool $expandDeliveryAddress;

    /** True to get delivery contact for a branch. */
    #[Property]
    public ?bool $expandDeliveryContact;

    /** True to get default country for a branch. */
    #[Property]
    public ?bool $expandDefaultCountry;

    /** True to get payment settings for Branch. */
    #[Property]
    public ?bool $expandBankSettings;
}
