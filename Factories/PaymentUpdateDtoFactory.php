<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PaymentUpdateDto;
use Pionect\VismaSdk\Enums\PaymentTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\PaymentUpdateDto>
 */
class PaymentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'referenceNumber' => $this->faker->word(),
            'type' => $this->faker->randomElement(PaymentTypeEnum::cases()),
            'hold' => $this->faker->boolean(),
            'applicationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'applicationPeriod' => $this->faker->word(),
            'paymentRef' => $this->faker->word(),
            'customer' => $this->faker->word(),
            'location' => $this->faker->word(),
            'paymentMethod' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'paymentAmount' => null,
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
