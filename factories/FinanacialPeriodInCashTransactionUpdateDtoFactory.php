<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FinanacialPeriodInCashTransactionUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FinanacialPeriodInCashTransactionUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return FinanacialPeriodInCashTransactionUpdateDto::class;
    }
}
