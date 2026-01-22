<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DepartmentInEmployeeUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DepartmentInEmployeeUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DepartmentInEmployeeUpdateDto::class;
    }
}
