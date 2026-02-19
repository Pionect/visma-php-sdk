<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Owner &gt; The employee who is responsible for the purchase order.
 *
 * @method static \Pionect\VismaSdk\Factories\OwnerInPurchaseOrderDtoFactory testFactory()
 */
class OwnerInPurchaseOrderDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click the magnifier > The identifier */
        public ?string $id = null,
        /** Click the magnifier > The displayed name */
        public ?string $name = null,
    ) {}
}
