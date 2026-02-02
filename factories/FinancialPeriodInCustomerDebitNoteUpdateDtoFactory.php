<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FinancialPeriodInCustomerDebitNoteUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FinancialPeriodInCustomerDebitNoteUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return FinancialPeriodInCustomerDebitNoteUpdateDto::class;
    }
}
