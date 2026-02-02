<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FinancialPeriodInJournalTransactionUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FinancialPeriodInJournalTransactionUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return FinancialPeriodInJournalTransactionUpdateDto::class;
    }
}
