<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General ledger accounts &gt;
 */
class GlAccountsInVatInformationDto extends Model
{
    #[Property]
    public ?vatPayableAccountInVatGlAccountsDto $vatPayableAccount;

    #[Property]
    public ?vatPayableSubaccountInVatGlAccountsDto $vatPayableSubaccount;

    #[Property]
    public ?vatClaimableAccountInVatGlAccountsDto $vatClaimableAccount;

    #[Property]
    public ?vatClaimableSubccountInVatGlAccountsDto $vatClaimableSubccount;
}
