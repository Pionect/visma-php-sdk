<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CreditTermsInCustomerDebitNoteDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CreditTermsInCustomerDebitNoteDtoFactory extends Factory
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
        return CreditTermsInCustomerDebitNoteDto::class;
    }
}
