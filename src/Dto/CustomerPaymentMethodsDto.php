<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerPaymentMethodsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerPaymentMethodsDtoFactory factory()
 */
class CustomerPaymentMethodsDto extends Model
{
    public function __construct(
        public ?string $customerId = null,
        public ?array $paymentMethods = null,
    ) {}
}
