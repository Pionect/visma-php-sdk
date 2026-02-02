<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerInCustomerCreditNoteDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerInCustomerCreditNoteDtoFactory extends Factory
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
        return CustomerInCustomerCreditNoteDto::class;
    }
}
