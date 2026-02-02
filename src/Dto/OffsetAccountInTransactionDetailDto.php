<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: Offset account* &gt; The account to be updated by the transaction.
 *
 * @method static \Pionect\VismaSdk\Factories\OffsetAccountInTransactionDetailDtoFactory testFactory()
 */
class OffsetAccountInTransactionDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
