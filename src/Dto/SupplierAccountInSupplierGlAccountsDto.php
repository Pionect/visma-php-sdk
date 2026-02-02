<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: Supplier account &gt; The liability account used to record the balance of supplier
 * ledger transactions related to the supplier.
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierAccountInSupplierGlAccountsDtoFactory testFactory()
 */
class SupplierAccountInSupplierGlAccountsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
