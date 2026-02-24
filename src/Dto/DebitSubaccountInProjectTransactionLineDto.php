<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Debit subaccount &gt; For released transactions, the subaccount the transaction debited when it was
 * released; for unreleased transactions, the subaccount the transaction debits if it is released.
 *
 * @method static \Pionect\VismaSdk\Factories\DebitSubaccountInProjectTransactionLineDtoFactory testFactory()
 */
class DebitSubaccountInProjectTransactionLineDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\DebitSubaccountInProjectTransactionLineDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $active = null,
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
