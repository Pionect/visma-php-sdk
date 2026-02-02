<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Branch &gt; The branch associated with the purchase order.
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInPurchaseOrderLineDtoFactory testFactory()
 */
class BranchInPurchaseOrderLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
