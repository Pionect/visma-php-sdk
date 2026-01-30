<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The financial period to which the transactions recorded in the document should be posted. Use the
 * format MMYYYY.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PostPeriodInInventoryReceiptUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PostPeriodInInventoryReceiptUpdateDtoFactory factory()
 */
class PostPeriodInInventoryReceiptUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
