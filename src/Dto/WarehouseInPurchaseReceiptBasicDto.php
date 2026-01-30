<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part or the Documents details tab &gt; Warehouse* &gt; The warehouse from
 * which the items have been received for transfer orders.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseInPurchaseReceiptBasicDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInPurchaseReceiptBasicDtoFactory testFactory()
 */
class WarehouseInPurchaseReceiptBasicDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
