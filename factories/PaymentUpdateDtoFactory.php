<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PaymentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'referenceNumber' => $this->faker->word(),
            'hold' => $this->faker->word(),
            'applicationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'applicationPeriod' => $this->faker->word(),
            'paymentRef' => $this->faker->word(),
            'customer' => $this->faker->word(),
            'location' => $this->faker->word(),
            'paymentMethod' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'paymentAmount' => $this->faker->word(),
            'invoiceText' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'overrideNumberSeries' => $this->faker->boolean(),
            'ordersToApply' => [],
            'financeCharges' => [],
            'paymentLines' => [],
        ];
    }

    protected function modelClass(): string
    {
        return PaymentUpdateDto::class;
    }
}
