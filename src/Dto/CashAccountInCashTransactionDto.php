<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Cash account* &gt; The cash account that is a source account for
 * the transaction.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CashAccountInCashTransactionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CashAccountInCashTransactionDtoFactory factory()
 */
class CashAccountInCashTransactionDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
