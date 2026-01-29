<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Location table tab &gt; Shipping location &gt; The warehouse location to be used to ship goods.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShipLocationInWarehouseDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShipLocationInWarehouseDtoFactory factory()
 */
class ShipLocationInWarehouseDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
