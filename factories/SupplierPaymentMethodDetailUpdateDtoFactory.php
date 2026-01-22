<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierPaymentMethodDetailUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierPaymentMethodDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'paymentMethodDetailDescription' => $this->faker->sentence(),
            'paymentMethodDetailValue' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierPaymentMethodDetailUpdateDto::class;
    }
}
