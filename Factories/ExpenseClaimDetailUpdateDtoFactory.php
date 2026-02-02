<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ExpenseClaimDetailUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseClaimDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'claimDetailId' => $this->faker->numberBetween(1, 1000),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'expenseItem' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'quantity' => null,
            'uom' => $this->faker->word(),
            'unitCost' => null,
            'invoiceable' => $this->faker->boolean(),
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'expenseAccount' => $this->faker->word(),
            'expenseSubaccount' => [],
            'branch' => $this->faker->word(),
            'taxCategory' => $this->faker->word(),
            'refNbr' => $this->faker->word(),
            'employeePart' => null,
            'customer' => $this->faker->word(),
            'location' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseClaimDetailUpdateDto::class;
    }
}
