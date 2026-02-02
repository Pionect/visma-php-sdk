<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchNumberInBudgetDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchNumberInBudgetDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return BranchNumberInBudgetDto::class;
    }
}
