<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The account added to the cash account.
 *
 * @method static \Pionect\VismaSdk\Factories\AccountInCashAccountDtoFactory testFactory()
 */
class AccountInCashAccountDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
