<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\JournalTransactionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class JournalTransactionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'module' => $this->faker->word(),
            'batchNumber' => $this->faker->word(),
            'status' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'transactionDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'postPeriod' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'ledger' => $this->faker->word(),
            'ledgerDescription' => $this->faker->sentence(),
            'currencyId' => $this->faker->uuid(),
            'exchangeRate' => $this->faker->randomFloat(2, 0, 1000),
            'autoReversing' => $this->faker->boolean(),
            'reversingEntry' => $this->faker->boolean(),
            'description' => $this->faker->sentence(),
            'originalBatchNumber' => $this->faker->word(),
            'debitTotal' => $this->faker->randomFloat(2, 0, 1000),
            'debitTotalInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'creditTotal' => $this->faker->randomFloat(2, 0, 1000),
            'creditTotalInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'controlTotal' => $this->faker->randomFloat(2, 0, 1000),
            'controlTotalInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'createVatTransaction' => $this->faker->boolean(),
            'skipVatAmountValidation' => $this->faker->boolean(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'transactionCode' => $this->faker->word(),
            'transactionCodeDescription' => $this->faker->sentence(),
            'branch' => $this->faker->word(),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'journalTransactionLines' => [],
            'attachments' => [],
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return JournalTransactionDto::class;
    }
}
