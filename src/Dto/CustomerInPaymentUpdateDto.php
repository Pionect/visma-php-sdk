<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Customer* &gt; The customer who issued the payment.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerInPaymentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerInPaymentUpdateDtoFactory factory()
 */
class CustomerInPaymentUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
