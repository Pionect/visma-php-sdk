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
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ShipViaInSalesOrderDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
