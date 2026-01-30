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
            'claimDetailId' => null,
            'date' => null,
            'expenseItem' => null,
            'description' => $this->faker->sentence(),
            'quantity' => null,
            'uom' => null,
            'unitCost' => null,
            'invoiceable' => null,
            'project' => null,
            'projectTask' => null,
            'expenseAccount' => null,
            'expenseSubaccount' => [],
            'branch' => null,
            'taxCategory' => null,
            'refNbr' => null,
            'employeePart' => null,
            'customer' => null,
            'location' => null,
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseClaimDetailUpdateDto::class;
    }
}
