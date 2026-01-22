<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\FinancialDetailsInPaymentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FinancialDetailsInPaymentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'paymentDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return FinancialDetailsInPaymentDto::class;
    }
}
