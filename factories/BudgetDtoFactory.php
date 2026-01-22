<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\BudgetDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BudgetDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'financialYear' => $this->faker->word(),
            'released' => $this->faker->boolean(),
            'releasedAmount' => $this->faker->randomFloat(2, 0, 1000),
            'account' => $this->faker->word(),
            'subaccount' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'distributedAmount' => $this->faker->randomFloat(2, 0, 1000),
            'periods' => [],
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'branchNumber' => $this->faker->word(),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return BudgetDto::class;
    }
}
