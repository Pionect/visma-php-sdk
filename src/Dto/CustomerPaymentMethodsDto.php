<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CustomerPaymentMethodsDtoFactory testFactory()
 */
class CustomerPaymentMethodsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $customerId = null,
        /** @var CustomerPaymentMethodDto[]|null */
        public ?array $paymentMethods = null,
    ) {}
}
