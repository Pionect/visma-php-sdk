<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DepartmentInExpenseClaimDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\DepartmentInExpenseClaimDto>
 */
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
