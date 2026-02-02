<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CashAccountInCustomerPaymentMethodDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CashAccountInCustomerPaymentMethodDtoFactory extends Factory
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
        return CashAccountInCustomerPaymentMethodDto::class;
    }
}
