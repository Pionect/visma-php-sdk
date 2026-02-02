<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerInCreditNoteDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerInCreditNoteDtoFactory extends Factory
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
        return CustomerInCreditNoteDto::class;
    }
}
