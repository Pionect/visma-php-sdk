<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Delivery settings tab &gt; Shipping information section &gt; Ship via &gt;  The Ship via code
 * that represents the carrier and its service to be used for shipping the ordered goods.
 *
 * @method static \Pionect\VismaSdk\Factories\ShipViaInSalesOrderDtoFactory testFactory()
 */
class ShipViaInSalesOrderDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
