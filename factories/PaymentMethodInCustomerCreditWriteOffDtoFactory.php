<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentMethodInCustomerCreditWriteOffDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentMethodInCustomerCreditWriteOffDtoFactory extends Factory
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
        return PaymentMethodInCustomerCreditWriteOffDto::class;
    }
}
