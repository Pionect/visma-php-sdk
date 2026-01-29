<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * CustomerBalanceV2Dto
 */
class CustomerBalanceV2dto extends Model
{
    #[Property]
    public ?branchNumberInCustomerBalanceV2Dto $branchNumber;

    #[Property]
    public ?customerInCustomerBalanceV2Dto $customer;

    /** Begin balance */
    #[Property]
    public ?float $beginBalance;

    /** Purchases */
    #[Property]
    public ?float $sales;

    /** Payments and prepayments */
    #[Property]
    public ?float $paymentsAndPrepayments;

    /** Adjustments and discounts */
    #[Property]
    public ?float $adjustmentsAndDiscounts;

    /** Overdue charges */
    #[Property]
    public ?float $overdueCharges;

    /** Year to date balance */
    #[Property]
    public ?float $yearToDateBalance;
}
