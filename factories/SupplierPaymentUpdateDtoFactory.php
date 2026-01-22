<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierPaymentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierPaymentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'referenceNumber' => $this->faker->word(),
            'hold' => $this->faker->word(),
            'applicationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'applicationPeriod' => $this->faker->word(),
            'paymentRef' => $this->faker->word(),
            'supplier' => $this->faker->word(),
            'location' => $this->faker->word(),
            'paymentMethod' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'paymentAmount' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'paymentLines' => [],
            'overrideNumberSeries' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierPaymentUpdateDto::class;
    }
}
