<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Information collected from the system. Some accounts visible in window, some not.
 */
class GlAccountsInCustomerDto extends Model
{
    #[Property]
    public ?AccountNumberTypeDescriptionDto $customerLedgerAccount;

    #[Property]
    public ?SubAccountDto $customerLedgerSubaccount;

    #[Property]
    public ?AccountNumberTypeDescriptionDto $salesAccount;

    #[Property]
    public ?AccountNumberTypeDescriptionDto $salesNonTaxableAccount;

    #[Property]
    public ?AccountNumberTypeDescriptionDto $salesEuAccount;

    #[Property]
    public ?AccountNumberTypeDescriptionDto $salesExportAccount;

    #[Property]
    public ?SubAccountDto $salesSubaccount;

    #[Property]
    public ?AccountNumberTypeDescriptionDto $discountAccount;

    #[Property]
    public ?SubAccountDto $discountSubaccount;

    #[Property]
    public ?AccountNumberTypeDescriptionDto $freightAccount;

    #[Property]
    public ?SubAccountDto $freightSubaccount;

    #[Property]
    public ?AccountNumberTypeDescriptionDto $cashDiscountAccount;

    #[Property]
    public ?SubAccountDto $cashDiscountSubaccount;

    #[Property]
    public ?AccountNumberTypeDescriptionDto $prepaymentAccount;

    #[Property]
    public ?SubAccountDto $prepaymentSubaccount;
}
