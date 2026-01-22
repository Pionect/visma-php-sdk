<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ExpenseClaimDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseClaimDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'claimDetailId' => $this->faker->numberBetween(1, 1000),
            'lineId' => $this->faker->uuid(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'expenseItem' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'uom' => $this->faker->word(),
            'unitCost' => $this->faker->randomFloat(2, 0, 1000),
            'currency' => $this->faker->word(),
            'totalAmount' => $this->faker->randomFloat(2, 0, 1000),
            'invoiceable' => $this->faker->boolean(),
            'claimAmount' => $this->faker->randomFloat(2, 0, 1000),
            'amountInClaimCurr' => $this->faker->randomFloat(2, 0, 1000),
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'expenseAccount' => $this->faker->word(),
            'expenseSubaccount' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'taxCategory' => $this->faker->word(),
            'refNbr' => $this->faker->word(),
            'salesAccount' => $this->faker->word(),
            'salesSubaccount' => $this->faker->word(),
            'employeePart' => $this->faker->randomFloat(2, 0, 1000),
            'customer' => $this->faker->word(),
            'location' => $this->faker->word(),
            'arReferenceNbr' => $this->faker->word(),
            'approvalStatus' => $this->faker->word(),
            'approvalStatusText' => $this->faker->word(),
            'approver' => $this->faker->word(),
            'attachments' => [],
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseClaimDetailDto::class;
    }
}
