<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CashAccountDtoFactory testFactory()
 */
class CashAccountDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /** @var EntryTypeDto[]|null */
        public ?array $entryTypes = null,
        public ?string $currency = null,
        public ?AccountInCashAccountDto $account = null,
        public ?SubaccountInCashAccountDto $subaccount = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
