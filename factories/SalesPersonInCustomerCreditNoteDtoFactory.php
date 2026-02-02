<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesPersonInCustomerCreditNoteDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesPersonInCustomerCreditNoteDtoFactory extends Factory
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
        return SalesPersonInCustomerCreditNoteDto::class;
    }
}
