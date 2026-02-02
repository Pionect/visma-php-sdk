<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentMethodInCustomerOverdueChargeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentMethodInCustomerOverdueChargeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return PaymentMethodInCustomerOverdueChargeDto::class;
    }
}
