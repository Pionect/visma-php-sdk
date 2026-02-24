<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\GeneralLedgerTransactionsQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\GeneralLedgerTransactionsQueryParameters>
 */
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
            'fromDate' => $this->faker->word(),
            'toDate' => $this->faker->word(),
            'includeUnposted' => $this->faker->boolean(),
            'includeUnreleased' => $this->faker->boolean(),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'lastModifiedDateTime' => $this->faker->word(),
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
