<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Debit account &gt; For released transactions, the account the transaction debited when it was
 * released; for unreleased transactions, the account the transaction debits if it is released (mainly
 * for the transactions that originate in the Projects module).
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DebitAccountInProjectTransactionLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DebitAccountInProjectTransactionLineDtoFactory factory()
 */
class DebitAccountInProjectTransactionLineDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?string $externalCode1 = null,
        public ?string $externalCode2 = null,
        public ?bool $active = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
