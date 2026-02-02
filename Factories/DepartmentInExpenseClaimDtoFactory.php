<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DepartmentInExpenseClaimDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DepartmentInExpenseClaimDtoFactory extends Factory
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
        return DepartmentInExpenseClaimDto::class;
    }
}
