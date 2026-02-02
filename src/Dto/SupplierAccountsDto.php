<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierAccountsDtoFactory testFactory()
 */
class SupplierAccountsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?SupplierAccountInSupplierAccountsDto $supplierAccount = null,
        public ?array $supplierItemAccounts = null,
    ) {}
}
