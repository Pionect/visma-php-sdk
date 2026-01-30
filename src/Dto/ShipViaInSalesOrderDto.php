<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Delivery settings tab &gt; Shipping information section &gt; Ship via &gt;  The Ship via code
 * that represents the carrier and its service to be used for shipping the ordered goods.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShipViaInSalesOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShipViaInSalesOrderDtoFactory testFactory()
 */
class ShipViaInSalesOrderDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
