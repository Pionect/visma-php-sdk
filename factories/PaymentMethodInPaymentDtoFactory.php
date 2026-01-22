<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentMethodInPaymentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentMethodInPaymentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return PaymentMethodInPaymentDto::class;
    }
}
