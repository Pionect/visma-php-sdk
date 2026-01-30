<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Branch associated
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchNumberInInventoryAdjustmentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInInventoryAdjustmentDtoFactory factory()
 */
class BranchNumberInInventoryAdjustmentDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
