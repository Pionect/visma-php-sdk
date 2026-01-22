<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatCodeInCustomerCreditNoteLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatCodeInCustomerCreditNoteLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return VatCodeInCustomerCreditNoteLineDto::class;
    }
}
