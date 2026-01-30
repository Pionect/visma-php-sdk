<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\GeneralLedgerBudgetQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class GeneralLedgerBudgetQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'isReleased' => $this->faker->boolean(),
            'greaterThanValue' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'orderBy' => $this->faker->word(),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'ledger' => $this->faker->word(),
            'financialYear' => $this->faker->word(),
            'subaccount' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return GeneralLedgerBudgetQueryParameters::class;
    }
}
