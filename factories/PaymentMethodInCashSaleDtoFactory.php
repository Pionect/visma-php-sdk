<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentMethodInCashSaleDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentMethodInCashSaleDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return PaymentMethodInCashSaleDto::class;
    }
}
