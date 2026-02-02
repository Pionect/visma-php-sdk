<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Payment settings tab &gt; Payment method
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentMethodInSalesOrderDtoFactory testFactory()
 */
class PaymentMethodInSalesOrderDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
