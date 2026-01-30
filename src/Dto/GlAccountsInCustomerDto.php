<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Information collected from the system. Some accounts visible in window, some not.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\GlAccountsInCustomerDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\GlAccountsInCustomerDtoFactory testFactory()
 */
class GlAccountsInCustomerDto extends Model
{
    public function __construct(
        public ?AccountNumberTypeDescriptionDto $customerLedgerAccount = null,
        public ?SubAccountDto $customerLedgerSubaccount = null,
        public ?AccountNumberTypeDescriptionDto $salesAccount = null,
        public ?AccountNumberTypeDescriptionDto $salesNonTaxableAccount = null,
        public ?AccountNumberTypeDescriptionDto $salesEuAccount = null,
        public ?AccountNumberTypeDescriptionDto $salesExportAccount = null,
        public ?SubAccountDto $salesSubaccount = null,
        public ?AccountNumberTypeDescriptionDto $discountAccount = null,
        public ?SubAccountDto $discountSubaccount = null,
        public ?AccountNumberTypeDescriptionDto $freightAccount = null,
        public ?SubAccountDto $freightSubaccount = null,
        public ?AccountNumberTypeDescriptionDto $cashDiscountAccount = null,
        public ?SubAccountDto $cashDiscountSubaccount = null,
        public ?AccountNumberTypeDescriptionDto $prepaymentAccount = null,
        public ?SubAccountDto $prepaymentSubaccount = null,
    ) {}
}
