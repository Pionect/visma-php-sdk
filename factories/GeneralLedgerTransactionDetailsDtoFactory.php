<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\GeneralLedgerTransactionDetailsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class GeneralLedgerTransactionDetailsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'module' => $this->faker->word(),
            'batchNumber' => $this->faker->word(),
            'tranDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'period' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'refNumber' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'account' => $this->faker->word(),
            'ledger' => $this->faker->word(),
            'subaccount' => $this->faker->word(),
            'begBalance' => $this->faker->randomFloat(2, 0, 1000),
            'debitAmount' => $this->faker->randomFloat(2, 0, 1000),
            'creditAmount' => $this->faker->randomFloat(2, 0, 1000),
            'endingBalance' => $this->faker->randomFloat(2, 0, 1000),
            'currency' => $this->faker->word(),
            'currBegBalance' => $this->faker->randomFloat(2, 0, 1000),
            'currDebitAmount' => $this->faker->randomFloat(2, 0, 1000),
            'currCreditAmount' => $this->faker->randomFloat(2, 0, 1000),
            'currEndingBalance' => $this->faker->randomFloat(2, 0, 1000),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return GeneralLedgerTransactionDetailsDto::class;
    }
}
