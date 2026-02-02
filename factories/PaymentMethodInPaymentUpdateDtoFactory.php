<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentMethodInPaymentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentMethodInPaymentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PaymentMethodInPaymentUpdateDto::class;
    }
}
