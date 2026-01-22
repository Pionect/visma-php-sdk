<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FinancialPeriodInCustomerOverdueChargeUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FinancialPeriodInCustomerOverdueChargeUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return FinancialPeriodInCustomerOverdueChargeUpdateDto::class;
    }
}
