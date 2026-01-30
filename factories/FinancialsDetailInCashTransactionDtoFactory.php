<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\FinancialsDetailInCashTransactionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FinancialsDetailInCashTransactionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'batchNumber' => $this->faker->word(),
            'branch' => null,
            'cleared' => $this->faker->boolean(),
            'clearDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'taxZone' => null,
            'taxCalcMode' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return FinancialsDetailInCashTransactionDto::class;
    }
}
