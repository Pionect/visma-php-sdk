<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Delivery settings tab &gt; The shipping information section &gt; Preferred warehouse ID
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PreferredWarehouseInSalesOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PreferredWarehouseInSalesOrderDtoFactory factory()
 */
class PreferredWarehouseInSalesOrderDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
