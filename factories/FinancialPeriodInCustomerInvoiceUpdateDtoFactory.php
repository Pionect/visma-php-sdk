<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FinancialPeriodInCustomerInvoiceUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FinancialPeriodInCustomerInvoiceUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return FinancialPeriodInCustomerInvoiceUpdateDto::class;
    }
}
