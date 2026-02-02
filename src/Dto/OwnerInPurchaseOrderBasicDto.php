<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The top part &gt; Owner &gt; The employee who is responsible for the purchase order.
 *
 * @method static \Pionect\VismaSdk\Factories\OwnerInPurchaseOrderBasicDtoFactory testFactory()
 */
class OwnerInPurchaseOrderBasicDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
