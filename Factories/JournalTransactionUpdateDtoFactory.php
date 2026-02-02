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
            'hold' => $this->faker->boolean(),
            'transactionDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'postPeriod' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'ledger' => $this->faker->word(),
            'currencyId' => $this->faker->uuid(),
            'exchangeRate' => null,
            'autoReversing' => $this->faker->boolean(),
            'description' => $this->faker->sentence(),
            'controlTotalInCurrency' => null,
            'createVatTransaction' => $this->faker->boolean(),
            'skipVatAmountValidation' => $this->faker->boolean(),
            'transactionCode' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'overrideNumberSeries' => $this->faker->boolean(),
            'journalTransactionLines' => [],
        ];
    }

    protected function modelClass(): string
    {
        return JournalTransactionUpdateDto::class;
    }
}
