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
            'included' => null,
            'recurringPrice' => null,
            'recurringDiscount' => null,
            'extraUsagePrice' => null,
            'unInvoiced' => null,
            'usedTotal' => null,
        ];
    }

    protected function modelClass(): string
    {
        return CustomerContractRecurringSummaryLineDto::class;
    }
}
