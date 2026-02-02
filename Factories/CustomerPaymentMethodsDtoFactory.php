<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerPaymentMethodsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerPaymentMethodsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'customerId' => $this->faker->uuid(),
            'paymentMethods' => [],
        ];
    }

    protected function modelClass(): string
    {
        return CustomerPaymentMethodsDto::class;
    }
}
