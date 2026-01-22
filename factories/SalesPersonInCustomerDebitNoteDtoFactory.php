<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesPersonInCustomerDebitNoteDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesPersonInCustomerDebitNoteDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesPersonInCustomerDebitNoteDto::class;
    }
}
