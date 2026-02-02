<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\EmployeeClassInEmployeeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class EmployeeClassInEmployeeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return EmployeeClassInEmployeeDto::class;
    }
}
