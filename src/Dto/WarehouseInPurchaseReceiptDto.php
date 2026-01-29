<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part or the Documents details tab &gt; Warehouse* &gt; The warehouse from
 * which the items have been received for transfer orders.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseInPurchaseReceiptDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInPurchaseReceiptDtoFactory factory()
 */
class WarehouseInPurchaseReceiptDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
