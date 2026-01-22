<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierDocumentForSupplierQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierDocumentForSupplierQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'documentType' => $this->faker->word(),
            'released' => $this->faker->numberBetween(1, 100),
            'project' => $this->faker->word(),
            'expandApproval' => $this->faker->boolean(),
            'expandNote' => $this->faker->boolean(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'status' => $this->faker->word(),
            'expandLinePrebookAccounts' => $this->faker->boolean(),
            'branch' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'dueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'dueDateCondition' => $this->faker->word(),
            'docDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'docDateCondition' => $this->faker->word(),
            'item' => $this->faker->word(),
            'balance' => $this->faker->randomFloat(2, 0, 1000),
            'balanceCondition' => $this->faker->word(),
            'greaterThanValue' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'createdDateTimeCondition' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierDocumentForSupplierQueryParameters::class;
    }
}
