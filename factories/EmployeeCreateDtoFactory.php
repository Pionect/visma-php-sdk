<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\EmployeeCreateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class EmployeeCreateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'employeeCd' => $this->faker->word(),
            'department' => $this->faker->word(),
            'employeeClass' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'calendar' => $this->faker->word(),
            'contact' => $this->faker->word(),
            'address' => $this->faker->word(),
            'status' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return EmployeeCreateDto::class;
    }
}
