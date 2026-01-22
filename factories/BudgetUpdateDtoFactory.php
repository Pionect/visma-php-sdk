<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BudgetUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BudgetUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'ledger' => $this->faker->word(),
            'financialYear' => $this->faker->word(),
            'account' => $this->faker->word(),
            'subaccount' => [],
            'description' => $this->faker->sentence(),
            'amount' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
            'periods' => [],
        ];
    }

    protected function modelClass(): string
    {
        return BudgetUpdateDto::class;
    }
}
