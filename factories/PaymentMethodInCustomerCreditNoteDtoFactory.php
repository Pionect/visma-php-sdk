<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentMethodInCustomerCreditNoteDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentMethodInCustomerCreditNoteDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return PaymentMethodInCustomerCreditNoteDto::class;
    }
}
