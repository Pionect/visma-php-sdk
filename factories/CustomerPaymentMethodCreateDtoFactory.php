<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerPaymentMethodCreateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerPaymentMethodCreateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'customerId' => $this->faker->word(),
            'paymentMethodId' => $this->faker->word(),
            'active' => $this->faker->word(),
            'cashAccountId' => $this->faker->word(),
            'paymentMethodDetails' => [],
        ];
    }

    protected function modelClass(): string
    {
        return CustomerPaymentMethodCreateDto::class;
    }
}
