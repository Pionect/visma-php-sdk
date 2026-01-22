<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PaymentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'refNbr' => $this->faker->word(),
            'status' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'applicationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'applicationPeriod' => $this->faker->word(),
            'paymentRef' => $this->faker->word(),
            'customer' => $this->faker->word(),
            'location' => $this->faker->word(),
            'paymentMethod' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'paymentAmount' => $this->faker->randomFloat(2, 0, 1000),
            'invoiceText' => $this->faker->word(),
            'appliedToDocuments' => $this->faker->randomFloat(2, 0, 1000),
            'appliedToOrders' => $this->faker->randomFloat(2, 0, 1000),
            'availableBalance' => $this->faker->randomFloat(2, 0, 1000),
            'writeOffAmount' => $this->faker->randomFloat(2, 0, 1000),
            'financeCharges' => $this->faker->randomFloat(2, 0, 1000),
            'deductedCharges' => $this->faker->randomFloat(2, 0, 1000),
            'branch' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'paymentLines' => [],
            'ordersToApply' => [],
            'financialDetails' => $this->faker->word(),
            'paymentAmountInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'availableBalanceInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PaymentDto::class;
    }
}
