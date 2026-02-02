<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Document details tab &gt; Branch &gt; The branch to receive the item.
 *
 * @method static \Pionect\VismaSdk\Factories\BranchInPurchaseOrderBasicDtoFactory testFactory()
 */
class BranchInPurchaseOrderBasicDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
