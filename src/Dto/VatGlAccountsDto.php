<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatGlAccountsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatGlAccountsDtoFactory testFactory()
 */
class VatGlAccountsDto extends Model
{
    public function __construct(
        public ?VatPayableAccountInVatGlAccountsDto $vatPayableAccount = null,
        public ?VatPayableSubaccountInVatGlAccountsDto $vatPayableSubaccount = null,
        public ?VatClaimableAccountInVatGlAccountsDto $vatClaimableAccount = null,
        public ?VatClaimableSubccountInVatGlAccountsDto $vatClaimableSubccount = null,
    ) {}
}
