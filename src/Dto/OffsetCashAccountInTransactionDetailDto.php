<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Offset cash account &gt; The cash account to be used for the transaction.
 *
 * @method static \Pionect\VismaSdk\Factories\OffsetCashAccountInTransactionDetailDtoFactory testFactory()
 */
class OffsetCashAccountInTransactionDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
