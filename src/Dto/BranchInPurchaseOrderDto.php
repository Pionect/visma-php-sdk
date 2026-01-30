<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Document details tab &gt; Branch &gt; The branch to receive the item.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchInPurchaseOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInPurchaseOrderDtoFactory testFactory()
 */
class BranchInPurchaseOrderDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
