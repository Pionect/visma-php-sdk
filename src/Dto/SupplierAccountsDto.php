<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierAccountsDtoFactory testFactory()
 */
class SupplierAccountsDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SupplierAccountsDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?SupplierAccountInSupplierAccountsDto $supplierAccount = null,
        /**
         * @var SupplierItemAccountDto[]|null
         *                                    The list of SUpplierItems Ids with their expense accounts
         */
        public ?array $supplierItemAccounts = null,
    ) {}
}
