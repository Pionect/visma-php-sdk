<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * The supplier account information
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierAccountInSupplierAccountsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierAccountInSupplierAccountsDtoFactory testFactory()
 */
class SupplierAccountInSupplierAccountsDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
        #[MapName('accountID')]
        public ?string $accountId = null,
        public ?SubaccountInSupplierAccountDto $subaccount = null,
    ) {}
}
