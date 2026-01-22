<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExpenseClaimDetailUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseClaimDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'claimDetailId' => $this->faker->word(),
            'date' => $this->faker->word(),
            'expenseItem' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'quantity' => $this->faker->word(),
            'uom' => $this->faker->word(),
            'unitCost' => $this->faker->word(),
            'invoiceable' => $this->faker->word(),
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'expenseAccount' => $this->faker->word(),
            'expenseSubaccount' => [],
            'branch' => $this->faker->word(),
            'taxCategory' => $this->faker->word(),
            'refNbr' => $this->faker->word(),
            'employeePart' => $this->faker->word(),
            'customer' => $this->faker->word(),
            'location' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseClaimDetailUpdateDto::class;
    }
}
