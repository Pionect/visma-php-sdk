<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'referenceNumber' => $this->faker->word(),
            'type' => null,
            'hold' => null,
            'applicationDate' => null,
            'applicationPeriod' => null,
            'paymentRef' => null,
            'customer' => null,
            'location' => null,
            'paymentMethod' => null,
            'cashAccount' => null,
            'currency' => null,
            'paymentAmount' => null,
            'invoiceText' => null,
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
