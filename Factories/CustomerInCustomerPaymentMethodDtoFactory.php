<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerInCustomerPaymentMethodDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerInCustomerPaymentMethodDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerInCustomerPaymentMethodDto::class;
    }
}
