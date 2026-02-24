<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SupplierBalanceV2Dto
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierBalanceV2dtoFactory testFactory()
 */
class SupplierBalanceV2dto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SupplierBalanceV2dtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Branch */
        public ?string $branch = null,
        public ?SupplierInSupplierBalanceV2dto $supplier = null,
        /** Begin balance */
        public int|float|null $beginBalance = null,
        /** Purchases */
        public int|float|null $purchases = null,
        /** Payments and prepayments */
        public int|float|null $paymentsAndPrepayments = null,
        /** Adjustments and discounts */
        public int|float|null $adjustmentsAndDiscounts = null,
        /** Year to date balance */
        public int|float|null $yearToDateBalance = null,
    ) {}
}
