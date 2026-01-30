<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierItemAccountDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierItemAccountDtoFactory factory()
 */
class SupplierItemAccountDto extends Model
{
    public function __construct(
        public ?string $supplierItemId = null,
        public ?string $itemId = null,
        #[MapName('accountID')]
        public ?string $accountId = null,
        public ?SubaccountInSupplierItemAccountDto $subaccount = null,
    ) {}
}
