<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerContractRecurringSummaryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerContractRecurringSummaryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'recurringTotal' => null,
            'extraUsageTotal' => null,
            'totalDue' => null,
            'lines' => [],
        ];
    }

    protected function modelClass(): string
    {
        return CustomerContractRecurringSummaryDto::class;
    }
}
