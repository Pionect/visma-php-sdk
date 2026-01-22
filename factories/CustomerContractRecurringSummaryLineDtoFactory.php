<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerContractRecurringSummaryLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerContractRecurringSummaryLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'itemCode' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'itemId' => $this->faker->uuid(),
            'uom' => $this->faker->word(),
            'invoiceType' => $this->faker->word(),
            'included' => $this->faker->randomFloat(2, 0, 1000),
            'recurringPrice' => $this->faker->randomFloat(2, 0, 1000),
            'recurringDiscount' => $this->faker->randomFloat(2, 0, 1000),
            'extraUsagePrice' => $this->faker->randomFloat(2, 0, 1000),
            'unInvoiced' => $this->faker->randomFloat(2, 0, 1000),
            'usedTotal' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerContractRecurringSummaryLineDto::class;
    }
}
