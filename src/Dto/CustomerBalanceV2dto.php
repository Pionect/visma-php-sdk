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
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CustomerBalanceV2dtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?BranchNumberInCustomerBalanceV2dto $branchNumber = null,
        public ?CustomerInCustomerBalanceV2dto $customer = null,
        /** Begin balance */
        public int|float|null $beginBalance = null,
        /** Purchases */
        public int|float|null $sales = null,
        /** Payments and prepayments */
        public int|float|null $paymentsAndPrepayments = null,
        /** Adjustments and discounts */
        public int|float|null $adjustmentsAndDiscounts = null,
        /** Overdue charges */
        public int|float|null $overdueCharges = null,
        /** Year to date balance */
        public int|float|null $yearToDateBalance = null,
    ) {}
}
