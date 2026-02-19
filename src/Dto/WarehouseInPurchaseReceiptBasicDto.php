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
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
