<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * CustomerBalanceV2Dto
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerBalanceV2dtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerBalanceV2dtoFactory testFactory()
 */
class CustomerBalanceV2dto extends Model
{
    public function __construct(
        public ?BranchNumberInCustomerBalanceV2dto $branchNumber = null,
        public ?CustomerInCustomerBalanceV2dto $customer = null,
        public int|float|null $beginBalance = null,
        public int|float|null $sales = null,
        public int|float|null $paymentsAndPrepayments = null,
        public int|float|null $adjustmentsAndDiscounts = null,
        public int|float|null $overdueCharges = null,
        public int|float|null $yearToDateBalance = null,
    ) {}
}
