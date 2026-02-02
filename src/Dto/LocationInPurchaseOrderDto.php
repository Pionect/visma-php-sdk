<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part &gt; Location* &gt; Click the magnifier. The supplier location from
 * which the items will be received.
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInPurchaseOrderDtoFactory testFactory()
 */
class LocationInPurchaseOrderDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $id = null,
        public ?string $name = null,
    ) {}
}
