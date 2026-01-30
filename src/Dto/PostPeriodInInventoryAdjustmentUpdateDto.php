<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The financial period to which the transactions recorded in the document should be posted. Use the
 * format MMYYYY.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PostPeriodInInventoryAdjustmentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PostPeriodInInventoryAdjustmentUpdateDtoFactory factory()
 */
class PostPeriodInInventoryAdjustmentUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
