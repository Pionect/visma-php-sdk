<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerPaymentMethodInfoDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerPaymentMethodInfoDtoFactory testFactory()
 */
class CustomerPaymentMethodInfoDto extends Model
{
    public function __construct(
        public ?string $paymentMethodId = null,
        public ?bool $isDefault = null,
    ) {}
}
