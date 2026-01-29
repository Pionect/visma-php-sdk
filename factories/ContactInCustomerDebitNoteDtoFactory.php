<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ContactInCustomerDebitNoteDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ContactInCustomerDebitNoteDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->numberBetween(1, 100),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return ContactInCustomerDebitNoteDto::class;
    }
}
