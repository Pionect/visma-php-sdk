<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FinancialPeriodQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FinancialPeriodQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'greaterThanValue' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return FinancialPeriodQueryParameters::class;
    }
}
