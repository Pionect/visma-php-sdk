<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\VatGlAccountsDtoFactory testFactory()
 */
class VatGlAccountsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?VatPayableAccountInVatGlAccountsDto $vatPayableAccount = null,
        public ?VatPayableSubaccountInVatGlAccountsDto $vatPayableSubaccount = null,
        public ?VatClaimableAccountInVatGlAccountsDto $vatClaimableAccount = null,
        public ?VatClaimableSubccountInVatGlAccountsDto $vatClaimableSubccount = null,
    ) {}
}
