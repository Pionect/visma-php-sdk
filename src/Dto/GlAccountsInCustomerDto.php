<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Information collected from the system. Some accounts visible in window, some not.
 *
 * @method static \Pionect\VismaSdk\Factories\GlAccountsInCustomerDtoFactory testFactory()
 */
class GlAccountsInCustomerDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\GlAccountsInCustomerDtoFactory> */
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
