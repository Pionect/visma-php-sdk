<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Reason code &gt; The reason code associated with the transferred goods.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ReasonCodeInInventoryReceiptLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ReasonCodeInInventoryReceiptLineDtoFactory factory()
 */
class ReasonCodeInInventoryReceiptLineDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
