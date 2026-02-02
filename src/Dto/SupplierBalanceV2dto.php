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
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $branch = null,
        public ?SupplierInSupplierBalanceV2dto $supplier = null,
        public int|float|null $beginBalance = null,
        public int|float|null $purchases = null,
        public int|float|null $paymentsAndPrepayments = null,
        public int|float|null $adjustmentsAndDiscounts = null,
        public int|float|null $yearToDateBalance = null,
    ) {}
}
