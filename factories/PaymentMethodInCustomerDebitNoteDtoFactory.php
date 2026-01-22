<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentMethodInCustomerDebitNoteDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentMethodInCustomerDebitNoteDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return PaymentMethodInCustomerDebitNoteDto::class;
    }
}
