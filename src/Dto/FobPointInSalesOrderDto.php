<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Delivery settings tab &gt; Shipping information section &gt; FOB point &gt; The point where
 * ownership of the goods is transferred to the customer.
 *
 * @method static \Pionect\VismaSdk\Factories\FobPointInSalesOrderDtoFactory testFactory()
 */
class FobPointInSalesOrderDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
