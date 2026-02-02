<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\EmployeeUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class EmployeeUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'employeeClass' => $this->faker->word(),
            'status' => null,
            'department' => null,
            'contact' => null,
            'address' => null,
            'branch' => $this->faker->word(),
            'calendar' => $this->faker->word(),
            'companyTreeInfo' => [],
        ];
    }

    protected function modelClass(): string
    {
        return EmployeeUpdateDto::class;
    }
}
