<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalespersonInCustomerDebitNoteUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalespersonInCustomerDebitNoteUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SalespersonInCustomerDebitNoteUpdateDto::class;
    }
}
