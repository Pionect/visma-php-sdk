<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierAccountsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierAccountsDtoFactory testFactory()
 */
class SupplierAccountsDto extends Model
{
    public function __construct(
        public ?SupplierAccountInSupplierAccountsDto $supplierAccount = null,
        public ?array $supplierItemAccounts = null,
    ) {}
}
