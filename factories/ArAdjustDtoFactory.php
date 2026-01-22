<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ArAdjustDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ArAdjustDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'docType' => $this->faker->word(),
            'customerCd' => $this->faker->word(),
            'refNbr' => $this->faker->word(),
            'amountPaid' => $this->faker->randomFloat(2, 0, 1000),
            'cashDiscountTaken' => $this->faker->randomFloat(2, 0, 1000),
            'balance' => $this->faker->randomFloat(2, 0, 1000),
            'pendingPpd' => $this->faker->boolean(),
            'released' => $this->faker->boolean(),
            'hold' => $this->faker->boolean(),
            'voided' => $this->faker->boolean(),
            'ppdCrMemoRefNbr' => $this->faker->word(),
            'paymentRef' => $this->faker->word(),
            'status' => $this->faker->word(),
            'applicationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'applicationPeriod' => $this->faker->word(),
            'invoiceText' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ArAdjustDto::class;
    }
}
