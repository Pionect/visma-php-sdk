<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Debit subaccount &gt; For released transactions, the subaccount the transaction debited when it was
 * released; for unreleased transactions, the subaccount the transaction debits if it is released.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DebitSubaccountInProjectTransactionLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DebitSubaccountInProjectTransactionLineDtoFactory factory()
 */
class DebitSubaccountInProjectTransactionLineDto extends Model
{
    public function __construct(
        public ?bool $active = null,
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
