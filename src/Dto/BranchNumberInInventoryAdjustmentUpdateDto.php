<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Branch associated
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchNumberInInventoryAdjustmentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInInventoryAdjustmentUpdateDtoFactory testFactory()
 */
class BranchNumberInInventoryAdjustmentUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
