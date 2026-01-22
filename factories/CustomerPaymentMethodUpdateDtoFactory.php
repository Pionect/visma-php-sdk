<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerPaymentMethodUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerPaymentMethodUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'active' => $this->faker->word(),
            'cashAccountId' => $this->faker->word(),
            'paymentMethodDetails' => [],
        ];
    }

    protected function modelClass(): string
    {
        return CustomerPaymentMethodUpdateDto::class;
    }
}
