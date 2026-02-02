<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerPaymentMethodCreateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerPaymentMethodCreateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'customerId' => $this->faker->uuid(),
            'paymentMethodId' => $this->faker->uuid(),
            'active' => $this->faker->boolean(),
            'cashAccountId' => $this->faker->uuid(),
            'paymentMethodDetails' => [],
        ];
    }

    protected function modelClass(): string
    {
        return CustomerPaymentMethodCreateDto::class;
    }
}
