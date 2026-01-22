<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\JournalTransactionUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class JournalTransactionUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'batchNumber' => $this->faker->word(),
            'hold' => $this->faker->word(),
            'transactionDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'postPeriod' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'ledger' => $this->faker->word(),
            'currencyId' => $this->faker->word(),
            'exchangeRate' => $this->faker->word(),
            'autoReversing' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'controlTotalInCurrency' => $this->faker->word(),
            'createVatTransaction' => $this->faker->word(),
            'skipVatAmountValidation' => $this->faker->word(),
            'transactionCode' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'overrideNumberSeries' => $this->faker->word(),
            'journalTransactionLines' => [],
        ];
    }

    protected function modelClass(): string
    {
        return JournalTransactionUpdateDto::class;
    }
}
