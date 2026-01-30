<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Delivery settings tab &gt; Shipping information section &gt; Shipping terms
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShippingTermsInSalesOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShippingTermsInSalesOrderDtoFactory factory()
 */
class ShippingTermsInSalesOrderDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
