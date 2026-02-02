<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CustomerGlAccountsDtoFactory testFactory()
 */
class CustomerGlAccountsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
