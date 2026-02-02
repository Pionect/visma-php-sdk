<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CustomerBalanceV2Dto
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerBalanceV2dtoFactory testFactory()
 */
class CustomerBalanceV2dto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
