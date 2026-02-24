<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * General ledger accounts &gt;
 *
 * @method static \Pionect\VismaSdk\Factories\GlAccountsInVatInformationDtoFactory testFactory()
 */
class GlAccountsInVatInformationDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\GlAccountsInVatInformationDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?VatPayableAccountInVatGlAccountsDto $vatPayableAccount = null,
        public ?VatPayableSubaccountInVatGlAccountsDto $vatPayableSubaccount = null,
        public ?VatClaimableAccountInVatGlAccountsDto $vatClaimableAccount = null,
        public ?VatClaimableSubccountInVatGlAccountsDto $vatClaimableSubccount = null,
    ) {}
}
