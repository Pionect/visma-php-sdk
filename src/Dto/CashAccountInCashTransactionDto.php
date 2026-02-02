<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part &gt; Cash account* &gt; The cash account that is a source account for
 * the transaction.
 *
 * @method static \Pionect\VismaSdk\Factories\CashAccountInCashTransactionDtoFactory testFactory()
 */
class CashAccountInCashTransactionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
