<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PaymentLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'documentType' => $this->faker->word(),
            'refNbr' => $this->faker->word(),
            'amountPaid' => $this->faker->randomFloat(2, 0, 1000),
            'cashDiscountTaken' => $this->faker->randomFloat(2, 0, 1000),
            'balanceWriteOff' => $this->faker->randomFloat(2, 0, 1000),
            'writeOffReasonCode' => WriteOffReasonCodeInPaymentLineDtoFactory::new()->make(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'dueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'cashDiscountDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'balance' => $this->faker->randomFloat(2, 0, 1000),
            'cashDiscountBalance' => $this->faker->randomFloat(2, 0, 1000),
            'description' => $this->faker->sentence(),
            'currency' => $this->faker->word(),
            'postPeriod' => $this->faker->word(),
            'customerOrder' => $this->faker->word(),
            'crossRate' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return PaymentLineDto::class;
    }
}
