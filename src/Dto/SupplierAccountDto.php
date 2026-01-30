<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierAccountDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierAccountDtoFactory factory()
 */
class SupplierAccountDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
        #[MapName('accountID')]
        public ?string $accountId = null,
        public ?SubaccountInSupplierAccountDto $subaccount = null,
    ) {}
}
