<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Location* &gt; Click the magnifier. The supplier location from
 * which the items will be received.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInPurchaseOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInPurchaseOrderDtoFactory factory()
 */
class LocationInPurchaseOrderDto extends Model
{
    public function __construct(
        public ?int $id = null,
        public ?string $name = null,
    ) {}
}
