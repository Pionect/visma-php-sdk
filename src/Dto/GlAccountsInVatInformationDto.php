<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General ledger accounts &gt;
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\GlAccountsInVatInformationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\GlAccountsInVatInformationDtoFactory testFactory()
 */
class GlAccountsInVatInformationDto extends Model
{
    public function __construct(
        public ?VatPayableAccountInVatGlAccountsDto $vatPayableAccount = null,
        public ?VatPayableSubaccountInVatGlAccountsDto $vatPayableSubaccount = null,
        public ?VatClaimableAccountInVatGlAccountsDto $vatClaimableAccount = null,
        public ?VatClaimableSubccountInVatGlAccountsDto $vatClaimableSubccount = null,
    ) {}
}
