<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part &gt; Customer* &gt; The customer who issued the payment.
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInPaymentDtoFactory testFactory()
 */
class CustomerInPaymentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
