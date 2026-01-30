<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Offset account* &gt; The account to be updated by the transaction.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\OffsetAccountInTransactionDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\OffsetAccountInTransactionDetailDtoFactory factory()
 */
class OffsetAccountInTransactionDetailDto extends Model
{
    public function __construct(
        public ?string $type = null,
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
