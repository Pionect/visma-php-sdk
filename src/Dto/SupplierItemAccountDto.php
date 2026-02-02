<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierItemAccountDtoFactory testFactory()
 */
class SupplierItemAccountDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $supplierItemId = null,
        public ?string $itemId = null,
        #[MapName('accountID')]
        public ?string $accountId = null,
        public ?SubaccountInSupplierItemAccountDto $subaccount = null,
    ) {}
}
