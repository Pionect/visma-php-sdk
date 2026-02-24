<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Debit Account group &gt; The account group of the credit side account of the transaction.
 *
 * @method static \Pionect\VismaSdk\Factories\CreditAccountGroupInProjectTransactionLineDtoFactory testFactory()
 */
class CreditAccountGroupInProjectTransactionLineDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CreditAccountGroupInProjectTransactionLineDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click the magnifier. > The identifier. */
        public ?string $number = null,
        /** Click the magnifier. > The name. */
        public ?string $name = null,
    ) {}
}
