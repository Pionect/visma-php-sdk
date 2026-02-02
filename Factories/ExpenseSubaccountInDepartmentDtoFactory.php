<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExpenseSubaccountInDepartmentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseSubaccountInDepartmentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'active' => $this->faker->boolean(),
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseSubaccountInDepartmentDto::class;
    }
}
