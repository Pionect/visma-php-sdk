<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\GeneralLedgerTransactionsQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class GeneralLedgerTransactionsQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'branch' => $this->faker->word(),
            'ledger' => $this->faker->word(),
            'fromPeriod' => $this->faker->word(),
            'toPeriod' => $this->faker->word(),
            'account' => $this->faker->word(),
            'subaccountId' => $this->faker->uuid(),
            'fromDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'toDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'includeUnposted' => $this->faker->boolean(),
            'includeUnreleased' => $this->faker->boolean(),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'expandAccountInfo' => $this->faker->boolean(),
            'expandBranchInfo' => $this->faker->boolean(),
            'includeTransactionBalance' => $this->faker->boolean(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return GeneralLedgerTransactionsQueryParameters::class;
    }
}
