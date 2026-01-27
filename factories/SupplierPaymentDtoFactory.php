<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierPaymentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierPaymentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'documentType' => $this->faker->word(),
            'refNbr' => $this->faker->word(),
            'status' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'applicationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'applicationPeriod' => $this->faker->word(),
            'paymentRef' => $this->faker->word(),
            'supplier' => $this->faker->word(),
            'location' => $this->faker->word(),
            'paymentMethod' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'paymentAmount' => $this->faker->randomFloat(2, 0, 1000),
            'financeCharges' => $this->faker->randomFloat(2, 0, 1000),
            'balance' => $this->faker->randomFloat(2, 0, 1000),
            'unappliedBalance' => $this->faker->randomFloat(2, 0, 1000),
            'appliedAmount' => $this->faker->randomFloat(2, 0, 1000),
            'released' => $this->faker->boolean(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'branch' => $this->faker->word(),
            'paymentLines' => [],
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierPaymentDto::class;
    }
}
