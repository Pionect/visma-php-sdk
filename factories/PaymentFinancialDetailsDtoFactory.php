<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PaymentFinancialDetailsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentFinancialDetailsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'paymentDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return PaymentFinancialDetailsDto::class;
    }
}
