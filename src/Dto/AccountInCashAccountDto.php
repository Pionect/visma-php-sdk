<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The account added to the cash account.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AccountInCashAccountDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AccountInCashAccountDtoFactory testFactory()
 */
class AccountInCashAccountDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
