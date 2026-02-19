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
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
