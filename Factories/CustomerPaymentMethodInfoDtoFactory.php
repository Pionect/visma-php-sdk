<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerPaymentMethodInfoDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CustomerPaymentMethodInfoDto>
 */
class CustomerPaymentMethodInfoDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'paymentMethodId' => $this->faker->uuid(),
            'isDefault' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerPaymentMethodInfoDto::class;
    }
}
