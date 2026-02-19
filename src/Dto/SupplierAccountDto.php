<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierAccountDtoFactory testFactory()
 */
class SupplierAccountDto extends SpatieData
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
