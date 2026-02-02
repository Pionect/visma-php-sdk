<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CustomerPaymentMethodInfoDtoFactory testFactory()
 */
class CustomerPaymentMethodInfoDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $paymentMethodId = null,
        public ?bool $isDefault = null,
    ) {}
}
