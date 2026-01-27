<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ProjectEmployeeUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectEmployeeUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'employeeId' => $this->faker->uuid(),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectEmployeeUpdateDto::class;
    }
}
