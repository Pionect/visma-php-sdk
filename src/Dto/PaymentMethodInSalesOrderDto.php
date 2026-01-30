<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Payment settings tab &gt; Payment method
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PaymentMethodInSalesOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentMethodInSalesOrderDtoFactory factory()
 */
class PaymentMethodInSalesOrderDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
