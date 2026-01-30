<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Branch &gt; The branch associated with the purchase order.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchInPurchaseOrderLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInPurchaseOrderLineDtoFactory factory()
 */
class BranchInPurchaseOrderLineDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
