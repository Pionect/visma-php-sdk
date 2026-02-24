<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\GeneralLedgerTransactionDetailsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\GeneralLedgerTransactionDetailsDto>
 */
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
            'branch' => null,
            'account' => null,
            'ledger' => null,
            'subaccount' => $this->faker->word(),
            'begBalance' => null,
            'debitAmount' => null,
            'creditAmount' => null,
            'endingBalance' => null,
            'currency' => $this->faker->word(),
            'currBegBalance' => null,
            'currDebitAmount' => null,
            'currCreditAmount' => null,
            'currEndingBalance' => null,
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return GeneralLedgerTransactionDetailsDto::class;
    }
}
