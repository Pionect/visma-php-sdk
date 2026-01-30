<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Branch associated
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchNumberInInventoryReceiptDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInInventoryReceiptDtoFactory factory()
 */
class BranchNumberInInventoryReceiptDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
