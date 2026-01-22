<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CreditTermsInCustomerCreditNoteDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CreditTermsInCustomerCreditNoteDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return CreditTermsInCustomerCreditNoteDto::class;
    }
}
