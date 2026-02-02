<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part &gt; Entry type* &gt; The user-defined transaction type.
 *
 * @method static \Pionect\VismaSdk\Factories\EntryTypeInCashTransactionDtoFactory testFactory()
 */
class EntryTypeInCashTransactionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
