<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\EmployeeQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class EmployeeQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'linkedToUser' => $this->faker->boolean(),
            'greaterThanValue' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'orderBy' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return EmployeeQueryParameters::class;
    }
}
