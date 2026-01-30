<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Owner &gt; The employee who is responsible for the purchase order.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\OwnerInPurchaseOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\OwnerInPurchaseOrderDtoFactory factory()
 */
class OwnerInPurchaseOrderDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
