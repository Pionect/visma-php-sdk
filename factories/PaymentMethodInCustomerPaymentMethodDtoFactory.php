<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentMethodInCustomerPaymentMethodDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentMethodInCustomerPaymentMethodDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return PaymentMethodInCustomerPaymentMethodDto::class;
    }
}
