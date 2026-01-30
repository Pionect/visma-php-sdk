<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FinancialPeriodAmountDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FinancialPeriodAmountDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'periodId' => $this->faker->uuid(),
            'amount' => null,
        ];
    }

    protected function modelClass(): string
    {
        return FinancialPeriodAmountDto::class;
    }
}
