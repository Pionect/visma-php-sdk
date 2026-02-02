<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DepartmentUpdateBaseDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DepartmentUpdateBaseDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'departmentId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'expenseAccount' => $this->faker->word(),
            'expenseSubaccount' => [],
        ];
    }

    protected function modelClass(): string
    {
        return DepartmentUpdateBaseDto::class;
    }
}
