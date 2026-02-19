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
        /** A system generated date/time to indicate when the document was last changed. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /**
         * @var EntryTypeDto[]|null
         *                          The Entry types tab >
         */
        public ?array $entryTypes = null,
        public ?string $currency = null,
        public ?AccountInCashAccountDto $account = null,
        public ?SubaccountInCashAccountDto $subaccount = null,
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
