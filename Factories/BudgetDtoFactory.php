<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\BudgetDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\BudgetDto>
 */
class BudgetDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'financialYear' => $this->faker->word(),
            'released' => $this->faker->boolean(),
            'releasedAmount' => null,
            'account' => null,
            'subaccount' => null,
            'description' => $this->faker->sentence(),
            'amount' => null,
            'distributedAmount' => null,
            'periods' => [],
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'branchNumber' => $this->faker->word(),
            'timeStamp' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return BudgetDto::class;
    }
}
