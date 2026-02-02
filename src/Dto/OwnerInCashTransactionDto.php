<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Owner &gt; The user who created the cash transaction.
 *
 * @method static \Pionect\VismaSdk\Factories\OwnerInCashTransactionDtoFactory testFactory()
 */
class OwnerInCashTransactionDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
