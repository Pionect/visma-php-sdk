<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerPaymentMethodDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerPaymentMethodDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'customer' => null,
            'paymentMethod' => null,
            'active' => $this->faker->boolean(),
            'cashAccount' => null,
            'cardOrAccountNo' => $this->faker->word(),
            'paymentMethodDetails' => [],
            'timeStamp' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerPaymentMethodDto::class;
    }
}
