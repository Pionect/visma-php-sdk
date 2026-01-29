<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Document details tab &gt; Warehouse* &gt; The warehouse from which the items is
 * shipped.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseInShipmentDetailLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseInShipmentDetailLineDtoFactory factory()
 */
class WarehouseInShipmentDetailLineDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
