<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * The supplier account information
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierAccountInSupplierAccountsDtoFactory testFactory()
 */
class SupplierAccountInSupplierAccountsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The supplier number */
        public ?string $number = null,
        /** The supplier name */
        public ?string $name = null,
        /** The default Expense Account ID for the supplier */
        #[MapName('accountID')]
        public ?string $accountId = null,
        public ?SubaccountInSupplierAccountDto $subaccount = null,
    ) {}
}
