<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Warehouse* &gt; The warehouse where the stock item is received.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseInInventoryReceiptLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInInventoryReceiptLineDtoFactory factory()
 */
class WarehouseInInventoryReceiptLineDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
