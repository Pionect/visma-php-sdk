<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Branch associated
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchNumberInInventoryTransferUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInInventoryTransferUpdateDtoFactory factory()
 */
class BranchNumberInInventoryTransferUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
