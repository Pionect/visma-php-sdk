<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * SupplierBalanceV2Dto
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierBalanceV2dtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierBalanceV2dtoFactory testFactory()
 */
class SupplierBalanceV2dto extends Model
{
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
