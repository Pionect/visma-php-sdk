<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part or the Documents details tab &gt; Warehouse* &gt; The warehouse from
 * which the items have been received for transfer orders.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseInPurchaseReceiptBasicDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInPurchaseReceiptBasicDtoFactory factory()
 */
class WarehouseInPurchaseReceiptBasicDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
