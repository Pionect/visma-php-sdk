<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InvoiceableInTimeCardSummaryUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InvoiceableInTimeCardSummaryUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return InvoiceableInTimeCardSummaryUpdateDto::class;
    }
}
