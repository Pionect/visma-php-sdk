<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\AccountTypeEnum;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * Account &gt; The account updated by the batch transactions.
 *
 * @method static \Pionect\VismaSdk\Factories\AccountInGeneralLedgerTransactionDetailsDtoFactory testFactory()
 */
class AccountInGeneralLedgerTransactionDetailsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?AccountTypeEnum $type = null,
        /** ExternalCode1 is deprecated, please use ExternalCode1Info instead. */
        public ?string $externalCode1 = null,
        /** ExternalCode2 is deprecated, please use ExternalCode2Info instead. */
        public ?string $externalCode2 = null,
        #[MapName('externalCode1Info')]
        public ?ExternalCodeNumberDescriptionDto $externalCode1info = null,
        #[MapName('externalCode2Info')]
        public ?ExternalCodeNumberDescriptionDto $externalCode2info = null,
        #[MapName('glConsolAccountCD')]
        public ?string $glConsolAccountCd = null,
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
