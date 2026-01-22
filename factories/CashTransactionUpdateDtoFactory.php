<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CashTransactionUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CashTransactionUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'referenceNumber' => $this->faker->word(),
            'hold' => $this->faker->word(),
            'tranDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'finanacialPeriod' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'cashAccount' => $this->faker->word(),
            'entryType' => $this->faker->word(),
            'documentRef' => $this->faker->word(),
            'controlTotal' => $this->faker->word(),
            'vatAmount' => $this->faker->word(),
            'vatZone' => $this->faker->word(),
            'taxCalculationMode' => $this->faker->word(),
            'overrideNumberSeries' => $this->faker->word(),
            'cashTransactionDetails' => [],
            'cashTransactionTaxDetails' => [],
        ];
    }

    protected function modelClass(): string
    {
        return CashTransactionUpdateDto::class;
    }
}
