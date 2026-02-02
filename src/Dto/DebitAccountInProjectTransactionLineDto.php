<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Debit account &gt; For released transactions, the account the transaction debited when it was
 * released; for unreleased transactions, the account the transaction debits if it is released (mainly
 * for the transactions that originate in the Projects module).
 *
 * @method static \Pionect\VismaSdk\Factories\DebitAccountInProjectTransactionLineDtoFactory testFactory()
 */
class DebitAccountInProjectTransactionLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $externalCode1 = null,
        public ?string $externalCode2 = null,
        public ?bool $active = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
