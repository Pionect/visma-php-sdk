<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Owner &gt; The user who created the cash transaction.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\OwnerInCashTransactionDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\OwnerInCashTransactionDtoFactory testFactory()
 */
class OwnerInCashTransactionDto extends Model
{
    public function __construct(
        public ?string $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
