<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentMethodInCreditNoteDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentMethodInCreditNoteDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return PaymentMethodInCreditNoteDto::class;
    }
}
