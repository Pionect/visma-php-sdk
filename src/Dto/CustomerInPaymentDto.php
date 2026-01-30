<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Customer* &gt; The customer who issued the payment.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerInPaymentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInPaymentDtoFactory factory()
 */
class CustomerInPaymentDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
