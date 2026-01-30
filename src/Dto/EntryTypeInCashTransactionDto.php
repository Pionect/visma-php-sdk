<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Entry type* &gt; The user-defined transaction type.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EntryTypeInCashTransactionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EntryTypeInCashTransactionDtoFactory factory()
 */
class EntryTypeInCashTransactionDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
