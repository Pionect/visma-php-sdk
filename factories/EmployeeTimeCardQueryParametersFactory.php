<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\EmployeeTimeCardQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class EmployeeTimeCardQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'status' => $this->faker->word(),
            'week' => $this->faker->word(),
            'type' => $this->faker->word(),
            'greaterThanValue' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'orderBy' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'employeeCd' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return EmployeeTimeCardQueryParameters::class;
    }
}
