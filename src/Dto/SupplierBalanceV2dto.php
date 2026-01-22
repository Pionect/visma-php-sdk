<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * SupplierBalanceV2Dto
 */
class SupplierBalanceV2dto extends Model
{
    /** Branch */
    #[Property]
    public ?string $branch;

    #[Property]
    public ?\supplierInSupplierBalanceV2Dto $supplier;

    /** Begin balance */
    #[Property]
    public ?float $beginBalance;

    /** Purchases */
    #[Property]
    public ?float $purchases;

    /** Payments and prepayments */
    #[Property]
    public ?float $paymentsAndPrepayments;

    /** Adjustments and discounts */
    #[Property]
    public ?float $adjustmentsAndDiscounts;

    /** Year to date balance */
    #[Property]
    public ?float $yearToDateBalance;
}
