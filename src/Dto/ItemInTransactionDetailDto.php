<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Item ID &gt; The ID of the non-stock item specified as the transaction subject.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ItemInTransactionDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ItemInTransactionDetailDtoFactory factory()
 */
class ItemInTransactionDetailDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
