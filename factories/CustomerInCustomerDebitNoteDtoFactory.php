<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerInCustomerDebitNoteDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerInCustomerDebitNoteDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerInCustomerDebitNoteDto::class;
    }
}
