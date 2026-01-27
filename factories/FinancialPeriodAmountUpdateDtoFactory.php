<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FinancialPeriodAmountUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FinancialPeriodAmountUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'periodId' => $this->faker->uuid(),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return FinancialPeriodAmountUpdateDto::class;
    }
}
