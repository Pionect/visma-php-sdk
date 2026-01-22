<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerContractRecurringSummaryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerContractRecurringSummaryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'recurringTotal' => $this->faker->randomFloat(2, 0, 1000),
            'extraUsageTotal' => $this->faker->randomFloat(2, 0, 1000),
            'totalDue' => $this->faker->randomFloat(2, 0, 1000),
            'lines' => [],
        ];
    }

    protected function modelClass(): string
    {
        return CustomerContractRecurringSummaryDto::class;
    }
}
