<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Offset cash account &gt; The cash account to be used for the transaction.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\OffsetCashAccountInTransactionDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\OffsetCashAccountInTransactionDetailDtoFactory testFactory()
 */
class OffsetCashAccountInTransactionDetailDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
