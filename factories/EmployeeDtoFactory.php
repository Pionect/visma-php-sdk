<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\EmployeeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class EmployeeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'employeeUserId' => $this->faker->uuid(),
            'employeeId' => $this->faker->numberBetween(1, 1000),
            'employeeNumber' => $this->faker->word(),
            'employeeName' => $this->faker->company(),
            'status' => $this->faker->word(),
            'department' => $this->faker->word(),
            'contact' => $this->faker->word(),
            'address' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'employeeClass' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'calendarId' => $this->faker->uuid(),
            'employeeLogin' => $this->faker->word(),
            'workGroupDescription' => [],
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return EmployeeDto::class;
    }
}
