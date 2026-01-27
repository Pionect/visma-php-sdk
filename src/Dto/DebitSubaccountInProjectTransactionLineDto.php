<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Debit subaccount &gt; For released transactions, the subaccount the transaction debited when it was
 * released; for unreleased transactions, the subaccount the transaction debits if it is released.
 */
class DebitSubaccountInProjectTransactionLineDto extends Model
{
    #[Property]
    public ?bool $active;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
