<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part or the Documents details tab &gt; Warehouse* &gt; The warehouse from
 * which the items have been received for transfer orders.
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInPurchaseReceiptBasicDtoFactory testFactory()
 */
class WarehouseInPurchaseReceiptBasicDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
