<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * BranchId is deprecated, please use BranchNumber instead.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchIdInPurchaseReceiptLineBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchIdInPurchaseReceiptLineBasicUpdateDtoFactory factory()
 */
class BranchIdInPurchaseReceiptLineBasicUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
