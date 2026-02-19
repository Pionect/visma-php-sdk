<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\EmployeeTimeCardQueryParameters;
use Pionect\VismaSdk\Enums\EmployeeTimeCardQueryParametersStatusEnum;
use Pionect\VismaSdk\Enums\EmployeeTimeCardQueryParametersTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class EmployeeTimeCardQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'status' => $this->faker->randomElement(EmployeeTimeCardQueryParametersStatusEnum::cases()),
            'week' => $this->faker->word(),
            'type' => $this->faker->randomElement(EmployeeTimeCardQueryParametersTypeEnum::cases()),
            'greaterThanValue' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'orderBy' => $this->faker->word(),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'employeeCd' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return EmployeeTimeCardQueryParameters::class;
    }
}
