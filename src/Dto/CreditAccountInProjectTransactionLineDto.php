<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\AccountTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * Credit account &gt; For released transactions, the account the transaction credited when it was
 * released; for unreleased transactions, the account the transaction credits if it is released.
 *
 * @method static \Pionect\VismaSdk\Factories\CreditAccountInProjectTransactionLineDtoFactory testFactory()
 */
class CreditAccountInProjectTransactionLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Account > The account number. */
        public ?AccountTypeEnum $type = null,
        /** Account class > The identifier of the account class. */
        public ?string $externalCode1 = null,
        /** Account class > The name of the account class. */
        public ?string $externalCode2 = null,
        public ?bool $active = null,
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
