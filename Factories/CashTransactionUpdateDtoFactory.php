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
            'hold' => $this->faker->boolean(),
            'tranDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'finanacialPeriod' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'cashAccount' => $this->faker->word(),
            'entryType' => $this->faker->word(),
            'documentRef' => $this->faker->word(),
            'controlTotal' => null,
            'vatAmount' => null,
            'vatZone' => $this->faker->word(),
            'taxCalculationMode' => $this->faker->word(),
            'overrideNumberSeries' => $this->faker->boolean(),
            'cashTransactionDetails' => [],
            'cashTransactionTaxDetails' => [],
        ];
    }

    protected function modelClass(): string
    {
        return CashTransactionUpdateDto::class;
    }
}
