<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExpenseReceiptUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseReceiptUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'date' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'refNbr' => $this->faker->word(),
            'inventory' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
            'quantity' => $this->faker->word(),
            'unitCost' => $this->faker->word(),
            'totalAmount' => $this->faker->word(),
            'employeePart' => $this->faker->word(),
            'claimedBy' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'expenseClaim' => $this->faker->word(),
            'invoiceable' => $this->faker->word(),
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'customer' => $this->faker->word(),
            'location' => $this->faker->word(),
            'expenseAccount' => $this->faker->word(),
            'expenseSub' => $this->faker->word(),
            'salesAccount' => $this->faker->word(),
            'salesSub' => $this->faker->word(),
            'taxCategory' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseReceiptUpdateDto::class;
    }
}
