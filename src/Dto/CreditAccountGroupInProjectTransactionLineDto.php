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
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
