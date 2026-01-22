<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SalesPersonQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesPersonQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'salespersonCd' => $this->faker->word(),
            'name' => $this->faker->name(),
            'isActive' => $this->faker->boolean(),
            'commissionPct' => $this->faker->randomFloat(2, 0, 1000),
            'salesSub' => $this->faker->word(),
            'greaterThanValue' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
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
        return SalesPersonQueryParameters::class;
    }
}
