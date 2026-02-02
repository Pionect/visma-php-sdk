<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Financial details tab &gt; The Payment information section &gt; Payment method &gt; The
 * identifier for the payment method that the customer will use to pay the document.
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentMethodInCashSaleDtoFactory testFactory()
 */
class PaymentMethodInCashSaleDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
