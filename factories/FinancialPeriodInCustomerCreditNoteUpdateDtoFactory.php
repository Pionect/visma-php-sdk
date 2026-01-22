<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FinancialPeriodInCustomerCreditNoteUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FinancialPeriodInCustomerCreditNoteUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return FinancialPeriodInCustomerCreditNoteUpdateDto::class;
    }
}
