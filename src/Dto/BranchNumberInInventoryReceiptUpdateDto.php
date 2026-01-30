<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Branch associated
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchNumberInInventoryReceiptUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInInventoryReceiptUpdateDtoFactory testFactory()
 */
class BranchNumberInInventoryReceiptUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
