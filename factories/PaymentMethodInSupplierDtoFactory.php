<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentMethodInSupplierDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentMethodInSupplierDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return PaymentMethodInSupplierDto::class;
    }
}
